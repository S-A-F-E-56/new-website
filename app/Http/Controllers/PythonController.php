<?php

// app/Http/Controllers/PythonController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function runPythonScript()
    {
        $output = shell_exec('python3 ' . base_path('script.py'));
        return response()->json(['output' => $output]);
    }
}