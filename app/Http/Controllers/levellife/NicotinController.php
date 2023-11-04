<?php

namespace App\Http\Controllers\levellife;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NicotinController extends Controller
{
    public function index(Request $request)
{
    return view("levellife.nicotin");
}
    public function calculateRes(Request $request)
{
    $selectedValues = $request->except('_token'); // Get all form input values except the CSRF token

    // Initialize the total to 0
    $total = null;
    $total = 0;

    // Loop through the selected values and add them to the total
    foreach ($selectedValues as $value) {
        $total += (int)$value;
    }

    return view('levellife.nicotin', compact('total'));
}
}
