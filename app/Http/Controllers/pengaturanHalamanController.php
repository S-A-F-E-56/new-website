<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use App\Models\metadata;
use Illuminate\Http\Request;

class pengaturanHalamanController extends Controller
{
    function index()
    {
        $dataHalaman = halaman::orderBy('judul','asc')->get();
        $jadwalMahasiswa = riwayat::where('tipe', 'experience')->orderBy('judul', 'asc')->get(); // Ambil data dari experience

        return view("dashboard.pengaturanHalaman.index")
                ->with('dataHalaman', $dataHalaman)
                ->with('jadwalMahasiswa', $jadwalMahasiswa);
    }

    function update(Request $request)
    {
        metadata::updateOrCreate(['meta_key'=>'_halaman_about'],['meta_value' => $request->_halaman_about]);
        metadata::updateOrCreate(['meta_key'=>'_halaman_interest'],['meta_value' => $request->_halaman_interest]);
        metadata::updateOrCreate(['meta_key'=>'_halaman_award'],['meta_value' => $request->_halaman_award]);

        return redirect()->route('pengaturanHalaman.index')->with('success','Berhasil Update Data Pengaturan');
    }
}
