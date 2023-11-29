<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UViralController extends Controller
{
    public function index(Request $request)
{
    return view("doctors.d_viral");
}

public function processSymptoms(Request $request)
{
    $symptomsData = $request->except('_token');

    $symptoms = [];

    $userId = Auth::id();

    for ($i = 1; $i <= 23; $i++) {
        $symp = $request->input("sl{$i}");
        $symptoms["simp{$i}"] = $symp/5;
    }

    // занести дані в таблицю
    $viralData = ['user_id' => $userId] + $symptoms;
    DB::table('symp_viral_user')->insert($viralData);

    // розрахувати результат

    return redirect()->route('viral')
         ->with('ляляля', 'ляляля.');
}

public function defineIllness()
{
    
}
}
