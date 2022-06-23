<?php

namespace App\Http\Controllers;

use App\Http\Requests\FamilyFormRequest;
use App\Models\City;
use App\Models\Country;
use App\Models\Family;
use App\Models\Person;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.families.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $males = Person::where('gender', 'male')->orderBy('name', 'asc')->get();
        $females = Person::where('gender', 'female')->orderBy('name', 'asc')->get();
        $countries = Country::all();
        return view('backend.families.form')->with([
            'males' => $males,
            'females' => $females,
            'countries' => $countries,
        ]);
    }

    /**
     * getCountryCities returns country cities for api
     *
     * @return void
     */
    public function getCountryCities(Request $request)
    {
        $country_id = $request->input('country_id');
        $country = Country::findOrFail($country_id);
        return response()->json($country->cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamilyFormRequest $request)
    {
        // dd($request);
        try {
            DB::transaction(function () use ($request) {

                //ensure father is exist or add it
                $father_id = $request->father_id;
                if (!is_numeric($father_id)) {
                    $father_id = Person::insertGetId([
                        'name' => $request->father_id,
                        'gender' => 'female',
                    ]);
                }

                //ensure mother is exist or add it
                $mother_id = $request->mother_id;
                if (!is_numeric($mother_id)) {
                    $mother_id = Person::insertGetId([
                        'name' => $request->mother_id,
                        'gender' => 'female',
                    ]);
                }

                //add family
                $family_id = Family::insertGetId([
                    'father_id' => $father_id,
                    'mother_id' => $mother_id,
                    'country_id' => $request->country_id,
                    'city_id' => $request->city_id,
                    'marriage_date' => $request->marriage_date,
                    'is_divorced' => $request->is_divorced == 'on' ? 1 : 0,
                    'divorce_date' => $request->divorce_date ? $request->divorce_date : null,
                    'note' => $request->note,
                    'sons_count' => $request->sons_count,
                    'daughters_count' => $request->daughters_count,
                ]);

                //ensure sons are exist or add them
                if ($request->sons_count > 0 && count($request->sons) > 0) {
                    foreach ($request->sons as $key => $son_id) {
                        if ($son_id) {
                            // $son = Person::find($son_id);
                            // if (!$son) {
                            //     Person::insert([
                            //         'name' => $son_id,
                            //         'gender' => 'male',
                            //         'son_family_id' => $family_id
                            //     ]);
                            // } else {
                            //     $son->update([
                            //         'son_family_id' => $family_id
                            //     ]);
                            // }
                            if (is_numeric($son_id)) {
                                $son = Person::find($son_id);
                                $son->update([
                                    'son_family_id' => $family_id
                                ]);
                            } else {
                                Person::insert([
                                    'name' => $son_id,
                                    'gender' => 'male',
                                    'son_family_id' => $family_id
                                ]);
                            }
                        }
                    }
                }

                //ensure daughters are exist or add them
                if ($request->daughters_count > 0 && count($request->daughters) > 0) {
                    foreach ($request->daughters as $key => $daughter_id) {
                        if ($daughter_id) {

                            // $daughter = Person::find($daughter_id);
                            // if (!$daughter) {
                            //     Person::insert([
                            //         'name' => $daughter_id,
                            //         'gender' => 'female',
                            //         'son_family_id' => $family_id
                            //     ]);
                            // } else {
                            //     $daughter->update([
                            //         'son_family_id' => $family_id
                            //     ]);
                            // }
                            if (is_numeric($daughter_id)) {
                                $daughter = Person::find($daughter_id);
                                $daughter->update([
                                    'son_family_id' => $family_id
                                ]);
                            } else {
                                Person::insert([
                                    'name' => $daughter_id,
                                    'gender' => 'male',
                                    'son_family_id' => $family_id
                                ]);
                            }
                        }
                    }
                }
            });

            return redirect()->route('family.index')->with(['message' => 'تمت اضافه الاسره بنجاح']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function show(Family $family)
    {
        $sons = $family->sons()->where('gender', 'male')->get();
        $daughters = $family->sons()->where('gender', 'female')->get();
        return view('backend.families.show', ["family" => $family, "sons" => $sons, "daughters" => $daughters]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function edit(Family $family)
    {
        $males = Person::where('gender', 'male')->orderBy('name', 'asc')->get();
        $females = Person::where('gender', 'female')->orderBy('name', 'asc')->get();
        $countries = Country::all();
        $cities = City::all();
        return view('backend.families.edit')->with([
            'males' => $males,
            'females' => $females,
            'family' => $family,
            'countries' => $countries,
            'cities' => $cities,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function update(FamilyFormRequest $request, Family $family)
    {
        // ddd($request->daughters, $request->sons);
        // var_dump($request->sons);
        try {
            DB::transaction(function () use ($request, $family) {

                //ensure father is exist or add it
                $father_id = $request->father_id;
                if (!is_numeric($father_id)) {
                    $father_id = Person::insertGetId([
                        'name' => $request->father_id,
                        'gender' => 'female',
                    ]);
                }

                //ensure mother is exist or add it
                $mother_id = $request->mother_id;
                if (!is_numeric($mother_id)) {
                    $mother_id = Person::insertGetId([
                        'name' => $request->mother_id,
                        'gender' => 'female',
                    ]);
                }

                //update family
                $family->update([
                    'father_id' => $father_id,
                    'mother_id' => $mother_id,
                    'country_id' => $request->country_id,
                    'city_id' => $request->city_id,
                    'marriage_date' => $request->marriage_date,
                    'is_divorced' => $request->is_divorced == 'on' ? 1 : 0,
                    'divorce_date' => $request->divorce_date ? $request->divorce_date : null,
                    'note' => $request->note,
                    'sons_count' => $request->sons_count,
                    'daughters_count' => $request->daughters_count,
                ]);

                //Delete All sons of this family in order to add them later
                $family->sons()->update(['son_family_id' => null]);

                //ensure sons are exist or add them
                if ($request->sons > 0) {
                    foreach ($request->sons as $key => $son_id_or_name) {
                        if ($son_id_or_name) {
                            // $son = Person::find($son_id_or_name);
                            // dd(is_numeric($son_id_or_name));
                            // if (!$son) {
                            //     Person::insert([
                            //         'name' => $son_id_or_name,
                            //         'gender' => 'male',
                            //         'son_family_id' => $family->id
                            //     ]);
                            // } else {
                            //     $son->update([
                            //         'son_family_id' => $family->id
                            //     ]);
                            // }
                            if (is_numeric($son_id_or_name)) {
                                $son = Person::find($son_id_or_name);
                                $son->update([
                                    'son_family_id' => $family->id
                                ]);
                            } else {
                                Person::insert([
                                    'name' => $son_id_or_name,
                                    'gender' => 'male',
                                    'son_family_id' => $family->id
                                ]);
                            }
                        }
                    }
                }

                //ensure daughters are exist or add them
                if ($request->daughters) {
                    foreach ($request->daughters as $key => $daughter_id_or_name) {
                        if ($daughter_id_or_name) {

                            // $daughter = Person::find($daughter_id_or_name);
                            // dd(is_numeric($daughter_id_or_name));
                            // if (!$daughter) {
                            //     Person::insert([
                            //         'name' => $daughter_id_or_name,
                            //         'gender' => 'female',
                            //         'son_family_id' => $family->id
                            //     ]);
                            // } else {
                            //     $daughter->update([
                            //         'son_family_id' => $family->id
                            //     ]);
                            // }
                            if (is_numeric($daughter_id_or_name)) {
                                $son = Person::find($daughter_id_or_name);
                                $son->update([
                                    'son_family_id' => $family->id
                                ]);
                            } else {
                                Person::insert([
                                    'name' => $daughter_id_or_name,
                                    'gender' => 'male',
                                    'son_family_id' => $family->id
                                ]);
                            }
                        }
                    }
                }
            });

            return redirect()->route('family.index')->with(['message' => 'تم تعديل الاسره بنجاح']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Family  $family
     * @return \Illuminate\Http\Response
     */
    public function destroy(Family $family)
    {
        $family->update([
            'deleted_at' => date('Y-m-d H:i:s')
        ]);

        return redirect()->route('family.index')->with('message', 'تم الحذف بنجاح');
    }
}
