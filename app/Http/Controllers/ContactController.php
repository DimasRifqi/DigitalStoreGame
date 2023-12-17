<?php

namespace App\Http\Controllers;

use App\Models\contact_us;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contactctrl()
    {
        return view('/before_login/contact');
    }

    public function contactform(Request $request)
    {
        $request->validate([
            'nama1' => 'required|string|max:255',
            'email1' => 'required|email|max:255',
            'subject1' => 'required|string|max:255',
            'message1' => 'required|string',
        ]);

        $kritikSaran = new contact_us ([
            'nama' => $request->nama1,
            'email' => $request->email1,
            'subject' => $request->subject1,
            'message' => $request->message1,
        ]);

        $kritikSaran->save();

        return redirect('/contact')->with('success', 'Kritik & Saran Berhasil Terkirim !');

        // try {
        //     // Simpan data ke dalam database
        //     $kritikSaran = new contact_us ([
        //         'nama' => $request->nama1,
        //         'email' => $request->email1,
        //         'subject' => $request->subject1,
        //         'message' => $request->message1,
        //     ]);

        //     $kritikSaran->save();

        //     return redirect()->route('contact')->with('success', 'Kritik & Saran Anda berhasil terkirim!');
        // } catch (\Exception $e) {
        //     return redirect()->route('contact')->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        // }

    }

    public function contactlogctrl()
    {
        return view('/after_login/contactlogged');
    }

    public function contact_loggedform(Request $request)
    {
        $request->validate([
            'nama1' => 'required|string|max:255',
            'email1' => 'required|email|max:255',
            'subject1' => 'required|string|max:255',
            'message1' => 'required|string',
        ]);

        $kritikSaran = new contact_us ([
            'nama' => $request->nama1,
            'email' => $request->email1,
            'subject' => $request->subject1,
            'message' => $request->message1,
        ]);

        $kritikSaran->save();

        return redirect('/contactlogged')->with('success', 'Kritik & Saran Berhasil Terkirim !');


    }

    public function delete($id)
    {
        $testimonial = DB::table('contact_uses')->where('id_contact_us', $id)->first();

        if (!$testimonial) {
            return redirect()->back()->with('error', 'Testimonial not found');
        }

        DB::table('contact_uses')->where('id_contact_us', $id)->delete();

        return redirect()->back()->with('success', 'Testimonial deleted successfully');
    }

}
