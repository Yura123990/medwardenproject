<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Illness;

class UCardioVascularController extends Controller
{
    public function index(Request $request)
{
    $symp_q = 18;

    $symptoms = [
        "Постійний кашель",
        "Підвищена втома, тремтіння рук",
        "Бліде обличчя та сині губи",
        "Підвищена температура",
        "Сповільнення або посилення пульсу",
        "Стабільно підвищений чи знижений кров'яний тиск",
        "Набряки гомілок",
        "Часті головні болі та запаморочення",
        "Больові відчуття в ногах під час ходьби",
        "Болі у грудях",
        "Задуха",
        "Втрата свідомості",
        "Біль у хребті",
        "Відчуття серця, що вискакує з грудей",
        "Перебої у роботі серця",
        "Набряки всього тіла",
        "Порушення сну",
        "Нудота",
    ];
    
    return view("diagnostics.cardiovascular", compact('symptoms'));
}

public function processSymptoms(Request $request)
{
    $symp_q = 18;

    $symptomsData = $request->except('_token');

    $symptoms = [];
    $sympsum = [];

    $userId = Auth::id();

    for ($i = 1; $i <= $symp_q; $i++) {
        $symp = $request->input("sl{$i}");
        $symptoms["simp{$i}"] = $symp/5;
    }

    $sympsum = array_sum($symptoms);

    // занести дані в таблицю
    $viralData = ['user_id' => $userId] + $symptoms;
    DB::table('symp_cardio_user')->insert($viralData);
    //dd($viralData);

    // розрахувати результат
    $illnesses = DB::table('symp_cardio_res')->get();    
    //dd($illnesses);

    foreach ($illnesses as $illness) {
        $illnessId = $illness->illness_id;
        $calculatedValues[$illnessId] = [];
        $sum[$illnessId] = [];
    
        // Цикл для обробки всіх симптомів
        for ($i = 1; $i <= $symp_q; $i++) {
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

    return redirect()->route('cardiovascular')
         ->with('result', "Ваш попередній діагноз: $nearestIllness.");
}
}
