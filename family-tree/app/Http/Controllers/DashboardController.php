<?php

namespace App\Http\Controllers;

use App\Models\BigFamily;
use App\Models\Family;
use App\Models\Person;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $big_family_name = BigFamily::findOrFail(auth()->user()->big_family_id)->name;
        $people_count = Person::where('big_family_id', auth()->user()->big_family_id)->count();
        $families_count = Family::where('big_family_id', auth()->user()->big_family_id)->count();
        return view('backend.dashboard.index', [
            'people_count' => $people_count,
            'families_count' => $families_count,
            'big_family_name' => $big_family_name,
        ]);
    }
}
