<?php

namespace App\Http\Controllers\levellife;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexMassBodyController extends Controller
{
    public function index(Request $request)
{
    return view("levellife.indexmassbody");
}
    public function calculateBMI(Request $request)
{
    $weight = $request->input('weight');
    $height = $request->input('height');
    $bmi = null;

    // Perform BMI calculation (e.g., BMI = weight (kg) / (height (m) * height (m)))
    $heightInMeters = $height / 100; // Convert height from cm to meters
    $bmi = $weight / ($heightInMeters * $heightInMeters);

    $bmi = round($bmi, 1);

    return view('levellife.indexmassbody', [
        'weight' => $weight,
        'height' => $height,
        'bmi' => $bmi,
    ]);
}
}
