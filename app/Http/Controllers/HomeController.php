<?php

namespace App\Http\Controllers;

use App\Models\Halaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data halaman dari model
        $halaman = Halaman::all();

        // Kirim data halaman ke view
        return view('home', compact('halaman'));
    }
}