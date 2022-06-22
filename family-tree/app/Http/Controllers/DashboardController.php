<?php

namespace App\Http\Controllers;

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
        $people_count = Person::all()->count();
        $families_count = Family::all()->count();
        return view('backend.dashboard.index', ['people_count' => $people_count, 'families_count' => $families_count]);
    }
}
