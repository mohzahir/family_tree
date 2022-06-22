<?php

namespace App\Http\Controllers;

use App\Models\Family;
use App\Models\Person;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function showHome(Request $request)
    {
        if ($request->input('searchText')) {
            $persons = Person::where('name', 'like', '%' . $request->searchText . '%')->get();
            return view('frontend.search', ['searchText' => $request->input('searchText'), 'persons' => $persons]);
        }
        $featured_people = Person::where('is_featured', 1)->get();
        // dd($featured_people);

        return view('frontend.welcome', ['featured_people' => $featured_people]);
    }

    public function showFamilyMember(Request $request)
    {

        $person = Person::findOrFail($request->id);
        // dd($person);
        return view('frontend.family-member', ['person' => $person]);
    }
    public function showFamilyMembers(Request $request)
    {

        $people = Person::when($request->searchText, function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->searchText . '%');
        })->get();
        // dd($person);
        return view('frontend.family-members', ['people' => $people]);
    }
}
