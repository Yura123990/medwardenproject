<?php

namespace App\Http\Controllers\levellife;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LifeQualityController extends Controller
{
    public function index(Request $request)
{
    return view("levellife.lifequality");
}
    public function calculateRes(Request $request)
{
    $selectedValues_psych = $request->only(['sl1','sl2','sl3','sl4','sl5','sl6','sl7','sl8']);
    $selectedValues_emo = $request->only(['sl9','sl10','sl11','sl12','sl13', 'sl14', 'sl15','sl16']);
    $selectedValues_fiz = $request->only(['sl17','sl18','sl19','sl20', 'sl21','sl22', 'sl23','sl24', 'sl25']);

    // Initialize the total to 0
    $total_psych = null;
    $total_emo=null;
    $total_fiz=null;
    $total_psych = 0;
    $total_emo = 0;
    $total_fiz = 0;

    // Loop through the selected values and add them to the total
    foreach ($selectedValues_psych as $value_psych) {
        $total_psych += (int)$value_psych;
    }
    foreach ($selectedValues_emo as $value_emo) {
        $total_emo += (int)$value_emo;
    }
    foreach ($selectedValues_fiz as $value_fiz) {
        $total_fiz += (int)$value_fiz;
    }

    $max_psych = 30; // Максимальна кількість балів для психічної групи
    $max_emo = 24; // Максимальна кількість балів для емоційної групи
    $max_fiz = 45;

    

    return view('levellife.lifequality', compact('total_psych', 'total_emo', 'total_fiz', 'max_psych', 'max_emo', 'max_fiz'));
}
}
