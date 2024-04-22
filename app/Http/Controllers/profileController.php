<?php

namespace App\Http\Controllers;

use App\Models\metadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class profileController extends Controller
{
    function index()
    {
        return view('dashboard.profile.index');
    }

    function update(Request $request)
    {
        $request->validate([
            '_foto' => 'mimes:jpeg,jpg,png,gif|max:20480',
            '_email' => 'required|email'
        ], [
            '_foto.mimes' => 'Foto yang dimasukkan hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF',
            '_email.required' => 'Email tidak boleh kosong',
            '_email.email' => 'Format email yang dimasukkan tidak valid',
        ]);

        if($request->hasFile('_foto')) {
            $foto_file = $request->file('_foto');
            $foto_ekstensi = $foto_file->getClientOriginalExtension();
            $foto_baru = date('ymdhis') . ".$foto_ekstensi";
            $foto_file->move(public_path('foto'), $foto_baru);
            //update foto

            $foto_lama = get_meta_value('_foto');
            File::delete(public_path('foto')."/".$foto_lama);

            metadata::updateOrCreate(['meta_key' => '_foto'], ['meta_value' => $foto_baru]);
        }

        metadata::updateOrCreate(['meta_key' => '_email'], ['meta_value' => $request->_email]);
        metadata::updateOrCreate(['meta_key' => '_city'], ['meta_value' => $request->_city]);
        metadata::updateOrCreate(['meta_key' => '_province'], ['meta_value' => $request->_province]);
        metadata::updateOrCreate(['meta_key' => '_nohp'], ['meta_value' => $request->_nohp]);

        metadata::updateOrCreate(['meta_key' => '_facebook'], ['meta_value' => $request->_facebook]);
        metadata::updateOrCreate(['meta_key' => '_instagram'], ['meta_value' => $request->_instagram]);
        metadata::updateOrCreate(['meta_key' => '_linkedin'], ['meta_value' => $request->_linkedin]);
        metadata::updateOrCreate(['meta_key' => '_github'], ['meta_value' => $request->_github]);


        return redirect()->route('profile.index')->with('success', 'Berhasil Update Data Profile');
    }
}


