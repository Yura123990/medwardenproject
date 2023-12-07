<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Illness;

class UViralController extends Controller
{
    public function index(Request $request)
{
    $symptoms = [
        "Нежить",
        "Лихоманка",
        "Кашель",
        "Сильний біль у тілі",
        "Головний біль",
        "Сльозотеча",
        "Збільшення лімфовузлів",
        "Слабкість у тілі",
        "Блювання",
        "Біль в горлі",
        "Втрата апетиту",
        "Чхання",
        "Висока температура",
        "Діарея",
        "Біль у животі",
        "Втрата нюху",
        "Втрата смаку",
        "Втрата орієнтації в просторі",
        "Біль у м'язах і суглобах",
        "Біль у грудях",
        "Закреп",
        "Вушний біль",
        "Виснаження",
    ];
    
    return view("diagnostics.viral", compact('symptoms'));
}

public function processSymptoms(Request $request)
{
    $symptomsData = $request->except('_token');

    $symptoms = [];
    $sympsum = [];

    $userId = Auth::id();

    for ($i = 1; $i <= 23; $i++) {
        $symp = $request->input("sl{$i}");
        $symptoms["simp{$i}"] = $symp/5;
    }

    $sympsum = array_sum($symptoms);

    // занести дані в таблицю
    $viralData = ['user_id' => $userId] + $symptoms;
    DB::table('symp_viral_user')->insert($viralData);
    //dd($viralData);

    // розрахувати результат
    $illnesses = DB::table('symp_viral_res')->get();    
    //dd($illnesses);

    foreach ($illnesses as $illness) {
        $illnessId = $illness->illness_id;
        $calculatedValues[$illnessId] = [];
        $sum[$illnessId] = [];
    
        // Цикл для обробки всіх симптомів
        for ($i = 1; $i <= 23; $i++) {
            $calculatedValues[$illnessId]["val{$i}"] = abs($illness->{"res_symptom{$i}"} * 5 - $symptoms["simp{$i}"]);
        }
        $sum[$illnessId] = array_sum($calculatedValues[$illnessId]);
    
        // Виведення чи використання обчислених значень
    }
    
    // Знаходимо найближчу хворобу
    $minDistance = PHP_INT_MAX;
    $nearestIllnessId = null;
    
    foreach ($sum as $illnessId => $distance) {
        $currentDistance = abs($sympsum - $distance);
        if ($currentDistance < $minDistance) {
            $minDistance = $currentDistance;
            $nearestIllnessId = $illnessId;
        }
    }

    if($sympsum > 0) $nearestIllness = Illness::find($nearestIllnessId)->title;
    else $nearestIllness = "Не визначено, ознак хвороби немає";
    
    // Виводимо найближчу хворобу та відстань
    //echo "The nearest illness is with illness_id $nearestIllnessId and a distance of $minDistance.\n";
    
    
    //dd($calculatedValues, $sum, $sympsum);

    return redirect()->route('viral')
         ->with('result', "Ваш попередній діагноз: $nearestIllness.");
}
}
