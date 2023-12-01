<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function loginctrl()
    {
        return view('/before_login/login');
    }

    public function loginform(Request $request)
    {

        $credential =  $request->validate([
            'email' => ['required' , 'email:dns' ],
            'password' => ['required' , 'min:5' ],
        ]);

        if(Auth::attempt($credential)){
            $request ->session()->regenerate();
            return redirect('/dashboard');
        }
        else{
            return back ()->with('error','Kamu gagal Login');
        }


    }

    public function logout()
    {
        Auth::logout();
        return redirect('/index');
    }

}
