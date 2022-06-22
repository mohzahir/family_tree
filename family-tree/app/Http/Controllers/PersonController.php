<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonFormRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Family;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.person.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('backend.person.form')->with([
            'countries' => $countries,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonFormRequest $request)
    {
        // dd($request->all());

        $file = null;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo')->store('/files');
        }

        //Add person data
        Person::create([
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'name' => $request->name,
            'another_name' => $request->another_name,
            'gender' => $request->gender,
            'dateOfBirth' => $request->dateOfBirth,
            'is_dead' => $request->is_dead ? 1 : 0,
            'is_featured' => $request->is_featured ? 1 : 0,
            'dateOfDeath' => $request->dateOfDeath,
            'photo' => $file,
            'note' => $request->note,
        ]);

        return redirect()->route('person.index')->with('message', 'تمت الاضافه بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //test
        if ($person->son_family_id) {
            $brothers_from_father = [];
            $brothers_from_mother = [];
            $father_id = $person->family->father->id;
            $mother_id = $person->family->mother->id;
            $father_another_family_ids = Family::where('father_id', $father_id)->pluck('id');
            $brothers_from_father = Person::whereIn('son_family_id', $father_another_family_ids)->where('id', "!=", $person->id)->get(['id', 'name', 'gender', 'son_family_id']);
            $mother_another_family_ids = Family::where('mother_id', $mother_id)->pluck('id');
            $brothers_from_mother = Person::whereIn('son_family_id', $mother_another_family_ids)->where('id', "!=", $person->id)->get(['id', 'name', 'gender', 'son_family_id']);
            $brothers_from_mother_and_father = $person->family->sons()->where('id', "!=", $person->id)->get(['id', 'name', 'gender', 'son_family_id']);
            // ddd($brothers_from_father, $brothers_from_mother, $brothers_form_mother_and_father);
        } else {
            $brothers_from_father = collect([]);
            $brothers_from_mother = collect([]);
            $brothers_from_mother_and_father = collect([]);
        }
        //test
        // if ($person->son_family_id) {
        //person has family
        //     $brothers = $person->family->sons()->where('gender', 'male')->get();
        //     $sisters = $person->family->sons()->where('gender', 'female')->get();
        // } else {
        //person doesn't have family
        //     $brothers = [];
        //     $sisters = [];
        // }
        return view('backend.person.show', [
            "person" => $person,
            "brothers_from_father" => $brothers_from_father,
            "brothers_from_mother" => $brothers_from_mother,
            "brothers_from_mother_and_father" => $brothers_from_mother_and_father,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $countries = Country::all();
        $cities = City::all();
        return view('backend.person.form')->with([
            'countries' => $countries,
            'cities' => $cities,
            'person' => $person
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        // dd($request->all(), $person);
        $file = $person->photo;
        if ($request->hasFile('photo')) {
            $file = $request->file('photo')->store('/files');
        }

        //Edit person data
        $person->update([
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'name' => $request->name,
            'another_name' => $request->another_name,
            'gender' => $request->gender,
            'dateOfBirth' => $request->dateOfBirth,
            'is_dead' => $request->is_dead ? 1 : 0,
            'is_featured' => $request->is_featured ? 1 : 0,
            'dateOfDeath' => !isset($request->is_dead) ? null : $request->dateOfDeath,
            'photo' => $file,
            'note' => $request->note,
        ]);

        return redirect()->route('person.show', $person->id)->with('message', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->update([
            'deleted_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->route('person.index')->with('message', 'تم الحذف بنجاح');
    }
}
