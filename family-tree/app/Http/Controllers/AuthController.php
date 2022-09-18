<?php

namespace App\Http\Controllers;

use App\Models\BigFamily;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('backend.auth.login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm()
    {
        return view('backend.auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'email' => 'البيانات المدخلة لا تطابق سجلاتنا',
        ])->onlyInput('email');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'min:3'],
            'main_person_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        DB::transaction(function () use ($credentials) {
            $main_person = Person::create([
                'name' => $credentials['main_person_name'],
                'big_family_id' => BigFamily::orderBy('id', 'desc')->first()->id + 1,
                'gender' => 'male',
            ]);

            $big_family_id = BigFamily::insertGetId([
                'name' => $credentials['name'],
                'main_person_id' => $main_person->id,
            ]);

            $main_person->update([
                'big_family_id' => $big_family_id,
            ]);

            $user = User::create([
                'name' => $credentials['name'],
                'email' => $credentials['email'],
                'password' => $credentials['password'],
                'big_family_id' => $big_family_id,
            ]);

            Auth::login($user);
        });


        if (Auth::check()) {
            return redirect()->intended(route('dashboard'));
        }


        return back()->withErrors([
            'email' => 'هناك خطأ بالمدخلات',
        ])->onlyInput('email');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
