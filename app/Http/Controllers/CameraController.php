<?php
// app/Http/Controllers/CameraController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function capture()
    {
        $output = shell_exec('python3 ' . base_path('camera.py'));
        return response()->json(['output' => $output, 'image' => url('capture.jpg')]);
    }
}
