<?php

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Req extends Auth
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika berhasil login
            $fullname = Auth::user()->fullname;
            $email = Auth::user()->email;
            $phone = Auth::user()->phone;
            $password = Auth::user()->password;

            return redirect()->intended('/dashboard');
        }

        // Jika login gagal
        // return redirect()->back()->with('status', 'Email atau password anda salah.');
        return redirect()->back()->withInput()->withErrors([
            'email' => 'Email atau password salah'
        ]);

    }
    

}


