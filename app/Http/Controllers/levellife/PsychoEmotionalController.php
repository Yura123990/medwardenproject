<?php

namespace App\Http\Controllers\levellife;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PsychoEmotionalController extends Controller
{
    public function index(Request $request)
{
    return view("levellife.psychoemotional");
}
    public function calculateRes(Request $request)
{
    $selectedValues = $request->only(['sl1','sl3','sl4','sl5','sl6','sl7','sl8','sl9','sl11','sl12','sl13','sl14','sl16','sl17','sl18','sl19','sl21','sl22','sl23','sl24','sl25','sl26', 'sl28', 'sl29','sl32','sl33','sl34','sl36','sl38','sl40','sl41','sl42','sl43','sl44','sl46', 'sl47','sl48','sl49','sl50']);
    $selectedValues_lie = $request->only(['sl2','sl10','sl15','sl20','sl27','sl30','sl35','sl39']);

    // Initialize the total to 0
    $total = null;
    $total_lie=null;
    $total = 0;
    $total_lie=0;

    // Loop through the selected values and add them to the total
    foreach ($selectedValues as $value) {
        $total += (int)$value;
    }
    foreach ($selectedValues_lie as $value_lie) {
        $total_lie += (int)$value_lie;
    }

    return view('levellife.psychoemotional', compact('total', 'total_lie'));
}
}
