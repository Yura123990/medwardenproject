<?php

namespace App\Http\Controllers\doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class DViralController extends Controller
{
    public function index(Request $request)
{
    return view("doctors.d_viral");
}

public function processSymptoms(Request $request)
{
    $symptomsData = $request->except('_token');

    $symptoms = array();

    $userId = Auth::id();
    $doctorId = Doctor::where('user_id', $userId)->value('id');
    $coefficient = Doctor::where('id', $doctorId)->value('expertise');
    //dd($coefficient);

    for ($i = 1; $i <= 20; $i++) {
        $weight = $request->input("symptom{$i}_weight");
        $intensity = $request->input("symptom{$i}_intensity");

        $characteristicFunction = $coefficient * $weight * $intensity;
        array_push($symptoms, $characteristicFunction);
    }

    dd($symptoms);

    return view('doctors.d_viral');
}
}
