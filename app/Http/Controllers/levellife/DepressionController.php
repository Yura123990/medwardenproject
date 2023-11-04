<?php

namespace App\Http\Controllers\levellife;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepressionController extends Controller
{
    public function index(Request $request)
{
    return view("levellife.depression");
}
    public function calculateRes(Request $request)
{
    $selectedValues_anx = $request->only(['sl1','sl2','sl3','sl4','sl5','sl6','sl7']);
    $selectedValues_depr = $request->only(['sl8','sl9','sl10','sl11','sl12','sl13', 'sl4']);

    // Initialize the total to 0
    $total_anx = null;
    $total_depr = null;
    $total_anx = 0;
    $total_depr = 0;

    // Loop through the selected values and add them to the total
    foreach ($selectedValues_anx as $value) {
        $total_anx += (int)$value;
    }
    foreach ($selectedValues_depr as $value_lie) {
        $total_anx += (int)$value_lie;
    }

    return view('levellife.depression', compact('total_anx', 'total_depr'));
}
}
