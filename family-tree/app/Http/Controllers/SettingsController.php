<?php

namespace App\Http\Controllers;

use App\Models\BigFamily;
use App\Models\Person;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('backend.settings.index', [
            'big_family' => BigFamily::findOrFail(auth()->user()->big_family_id),
            'big_family_people' => Person::where('big_family_id', auth()->user()->big_family_id)->get(),
        ]);
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:3',
            'main_person_id' => 'required',
            'note' => 'required|string|min:3',
        ]);

        // dd($request);
        $big_family = BigFamily::findOrFail(auth()->user()->big_family_id);
        $big_family->update($validatedData);
        return redirect()->back()->with('success', 'تم تحديث البيانات بنجاح');
    }
}
