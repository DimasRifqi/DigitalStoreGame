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
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required', 'min:5'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/dashboardadmin');
            } else {
                return redirect('/dashboard');
            }
        } else {
            return back()->with('error', 'Kamu gagal Login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
