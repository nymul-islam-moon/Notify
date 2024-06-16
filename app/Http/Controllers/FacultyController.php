<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use Carbon\Carbon;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faculty.faculty_login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('faculty.index');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login( Request $request )
    {
        $check = $request->all();
        if ( Auth::guard('faculty')->attempt(['email' => $check['email'], 'password' => $check['password'] ]) ) {
            return redirect()->route('faculty.dashboard')->with('success', 'Faculty Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }


    public function logout() {
        Auth::guard('faculty')->logout();
        return redirect()->route('faculty_login')->with('success', 'Faculty logout successfully');
    }


    public function register() {
        return view('faculty.faculty_register');
    } // end method

    public function register_store(Request $request) {

        Faculty::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make( $request->password ),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('faculty_login')->with('success', 'Faculty Created Successfully');
    }
}
