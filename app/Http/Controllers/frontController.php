<?php

namespace App\Http\Controllers;

use App\Models\halaman;
use App\Models\riwayat;
use App\Models\SensorData;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        $about_id = get_meta_value('_halaman_about');
        $about_data = halaman::where('id', $about_id)->first();

        $about1_id = get_meta_value('_halaman_interest');
        $about1_data = riwayat::where('id', $about1_id)->first();

        $latestSensorData = SensorData::orderBy('received_at', 'desc')->first();

        return view('front.index')->with([
            'about' => $about_data,
            'about1' => $about1_data,
            'sensorData' => $latestSensorData
        ]);
    }
}
