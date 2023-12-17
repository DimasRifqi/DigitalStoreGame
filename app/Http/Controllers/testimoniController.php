<?php

namespace App\Http\Controllers;

use App\Models\testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Http\Controllers\Flash;

class testimoniController extends Controller
{
    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'nama_testimoni' => 'required|string',
            'pekerjaan_testimoni' => 'required|string',
            'komentar_testimoni' => 'required|string',
            'foto_testimoni' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $imagePath = $request->file('foto_testimoni')->store('testimonials', 'public');

        $testimonial = new testimoni;
        $testimonial->nama_testimoni = $validatedData['nama_testimoni'];
        $testimonial->pekerjaan_testimoni = $validatedData['pekerjaan_testimoni'];
        $testimonial->komentar_testimoni = $validatedData['komentar_testimoni'];
        $testimonial->foto_testimoni = $imagePath;


        $testimonial->save();

        return redirect()->route('widget')->with('success', 'Testimonial created successfully');
    }

    public function update(Request $request, $id)
    {

        $testimonial = testimoni::find($id);

        // Validasi input jika diperlukan
        $request->validate([
            'nama_testimoni' => 'required',
            'pekerjaan_testimoni' => 'required',
            'komentar_testimoni' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Perbarui informasi testimonial
        $testimonial->nama_testimoni = $request->input('nama_testimoni');
        $testimonial->pekerjaan_testimoni = $request->input('pekerjaan_testimoni');
        $testimonial->komentar_testimoni = $request->input('komentar_testimoni');

        // Perbarui gambar testimonial jika diunggah
        if ($request->hasFile('foto_testimoni')) {
            // Proses upload gambar dan simpan ke storage
            $path = $request->file('foto_testimoni')->store('public/testimonials');
            $testimonial->foto_testimoni = basename($path);
        }

        $testimonial->save();

        return redirect('/testimonials')->with('success', 'Testimonial updated successfully');
    }

    public function delete(testimoni $testimoni){

        testimoni::destroy($testimoni ->id);
        //dd($testimoni);

        return redirect('widget');
    }

    // public function delete(testimoni $testimoni)
    // {
    //     if ($testimoni->id_testimoni) {
    //         Storage::delete('public/'.$testimoni->id_testimoni);
    //     }

    //     $testimoni->delete();
    //     //dd($testimoni);

    //     return to_route('widget')->with('success','Post deleted successfully');


    // }


}
