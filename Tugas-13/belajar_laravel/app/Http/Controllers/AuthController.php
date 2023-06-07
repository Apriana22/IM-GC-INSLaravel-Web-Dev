<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function processRegistration(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return redirect('/welcome')->with(compact('firstName', 'lastName'));
    }

    public function showWelcome(Request $request)
    {
        $firstName = $request->session()->get('firstName');
        $lastName = $request->session()->get('lastName');

        return view('auth.welcome', compact('firstName', 'lastName'));
    }
}
