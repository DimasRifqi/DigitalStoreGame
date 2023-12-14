<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function update(Request $request)
    {
        // $request->validate([
        //     'fullname' => 'required|string|max:255',
        // ]);

        // $update_user = Auth::user();
        // $update_user->fullname = $request->input('fullname');
        // $update_user->save();

        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'password' => 'nullable|string|min:6',
        ]);


        $update_user = Auth::user();

        $update_user->fullname = $request->input('fullname');
        $update_user->email = $request->input('email');
        $update_user->phone = $request->input('phone');

        if ($request->filled('password')) {
            $update_user->password = Hash::make($request->input('password'));
        }

        $update_user->save();

        return redirect('/settingori')->with('success', 'Update successful!');
    }

    public function settingctrl()
    {
        return view('/after_login/settingori');
    }
}
