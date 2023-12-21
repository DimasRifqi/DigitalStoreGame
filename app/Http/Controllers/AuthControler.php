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

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {

            $user = Auth::user();


            $fullname = $user->fullname;
            $email = $user->email;
            $phone = $user->phone;

            // Avoid unnecessary variables
            $password = $user->password; 

            // Redirect to the intended page or default dashboard
            return redirect()->intended('/dashboard');
        }

        // If authentication fails
        return redirect()
            ->back()
            ->withInput()
            ->withErrors([
                'email' => 'Email atau password salah',
            ]);
    }


}


