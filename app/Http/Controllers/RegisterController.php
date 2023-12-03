<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function loginctrl()
    {
        return view('/before_login/signup');
    }

    public function loginform(Request $request)
    {

        $request->validate([
            'fullname' => 'required|max:255',
            'phone'  => ['required', 'regex:/^[0-9]{11,12}$/','unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',

        ]);


        $datauser = User::create([
            'fullname' => $request->fullname,
            'phone'  => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $datauser->save();

        return redirect('/login')->with('success', 'Registration successful!');


    }





}
