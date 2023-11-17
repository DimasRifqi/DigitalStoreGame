<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// class RegisterController extends Controller
// {
//     public function showRegistrationForm()
//     {
//         return view('auth.register');
//     }

//     public function register(Request $request)
//     {
//         $request->validate([
//             'fullname' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255|unique:users',
//             'password' => 'required|string|min:8|confirmed',
//         ]);

//         User::create([
//             'fullname' => $request->name,
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//         ]);

//         // Atau gunakan auth()->login($user); untuk otomatis login setelah registrasi

//         return redirect('/index'); // Ganti dengan rute yang sesuai
//     }
// }


class RegisterController extends Controller
{
    public function show()
    {
        return view('signup');
    }

//     public function store(Request $request)
//     {
//     $validasiData = $request->validate([
//             'nama' =>['required'  , 'max:255' ],
//             'alamat' => ['required' , 'max:255'],
//             'email' => ['required' , 'email' , 'unique:users'],
//             'notlp' => ['required' , 'max:12' , 'unique:users'],
//             'password' => ['required' ,'required_with:password_konfirmasi','same:password_konfirmasi'],
//             'role' => 'required'
//         ]);

//         $validasiData['password'] = bcrypt($validasiData['password']);
//         $user = User::create($validasiData);


//         $request = session();
//         $request->flash('berhasil', 'Registrasi Berhasil! Silahkan verifikasi email');

//         event(new Registered($user));
//         //mengisi reservasi

//         return redirect()->route('verification.notice')
//         ->with('succes' , 'Akun berhasil di registrasi! Silah kan verifikasi email anda');

//     }

    public function store(Request $request)
    {
        
        $data = $request->validate([
            'fullname' => 'required|max:255',
            'phone'  => ['required', 'min:3', 'max:20'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',

        ]);
        dd($data);


        $user = User::create([
            'fullname' => $request->fullname,
            'phone'  => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/index')->with('success', 'Registration successful!');


    }


}

// $validatedData = [
//     'fullname' => 'John Doe',
//     'email' => 'john@example.com',
//     'password' => bcrypt('secret'),
//     // other fields...
// ];

// User::create($validatedData); -->
