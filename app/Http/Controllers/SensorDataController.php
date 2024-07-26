<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorDataController extends Controller
{
    public function index()
    {
        $data = SensorData::all();
        return view('sensor_data.index', compact('data'));
    }
    public function getLatestSensorData()
    {
        // Mengambil data sensor terbaru
        $latestSensorData = SensorData::orderBy('received_at', 'desc')->first();
        
        return response()->json($latestSensorData);
    }
}

