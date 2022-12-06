<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    
    public function login()
    {
        return view('pages.login.index');
    }

    

    // Public Login
    public function authenticate(Request $request)
    {
        $name = $request->name;
        $user = User::where('name',$name)->first();

        if (!$user) {
            return redirect()->back()->withInput($request->only('name'))->withErrors([
                'name' => 'We could not find you in our database, if you think this is a mistake kindly contact the site administrators',
            ]);
        }

            Auth::login($user);
            return redirect('/');

    }


    // Admin Login
    public function authenticateAdmin(Request $request)
    {
        $credentials = $request->validate([
            'name'      => ['required'],
            'password'  => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError','Login Failid!');

    }

    // logout
    public function logout(Request $request)

    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
