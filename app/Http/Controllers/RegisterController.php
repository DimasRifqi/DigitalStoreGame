<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function show()
    {
        return view('signup');
    }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'fullname' => 'required|max:255',
            'phone'  => ['required', 'min:3', 'max:20'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',

        ]);
        


        $user = User::create([
            'fullname' => $request->fullname,
            'phone'  => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/index')->with('success', 'Registration successful!');


    }


}
