<?php

namespace App\Http\Controllers\doctors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DViralController extends Controller
{
    public function index(Request $request)
{
    return view("doctors.d_viral");
}

public function processSymptoms(Request $request)
{
    $symptomsData = $request->except('_token');

    $illness = $request->input('sl1');

    $symptoms = [];

    $userId = Auth::id();
    $doctorId = Doctor::where('user_id', $userId)->value('id');
    $coefficient = Doctor::where('id', $doctorId)->value('expertise');
    //dd($coefficient);

    for ($i = 1; $i <= 20; $i++) {
        $weight = $request->input("symptom{$i}_weight");
        $intensity = $request->input("symptom{$i}_intensity")/10;

        $characteristicFunction = $coefficient * $weight * $intensity;
        $symptoms["simp{$i}"] = $characteristicFunction;
    }
    $viralData = ['doctor_id' => $doctorId, 'illness_id' => $illness] + $symptoms;
    DB::table('symp_viral_doctor')->insert($viralData);
    //dd($viralData);
    //dd($symptoms);
            //dd($results);
    self::calculateSymptomsAverage();
    return redirect()->route('d_viral')
         ->with('success', 'Дані були успішно занесені у таблицю.');
}
public function calculateSymptomsAverage()
{
    $results = DB::table('symp_viral_doctor')
            ->select('illness_id')
            ->selectRaw('AVG(simp1) as avg_symptom1')
            ->selectRaw('AVG(simp2) as avg_symptom2')
            ->selectRaw('AVG(simp3) as avg_symptom3')
            ->selectRaw('AVG(simp4) as avg_symptom4')
            ->selectRaw('AVG(simp5) as avg_symptom5')
            ->selectRaw('AVG(simp6) as avg_symptom6')
            ->selectRaw('AVG(simp7) as avg_symptom7')
            ->selectRaw('AVG(simp8) as avg_symptom8')
            ->selectRaw('AVG(simp9) as avg_symptom9')
            ->selectRaw('AVG(simp10) as avg_symptom10')
            ->selectRaw('AVG(simp11) as avg_symptom11')
            ->selectRaw('AVG(simp12) as avg_symptom12')
            ->selectRaw('AVG(simp13) as avg_symptom13')
            ->selectRaw('AVG(simp14) as avg_symptom14')
            ->selectRaw('AVG(simp15) as avg_symptom15')
            ->selectRaw('AVG(simp16) as avg_symptom16')
            ->selectRaw('AVG(simp17) as avg_symptom17')
            ->selectRaw('AVG(simp18) as avg_symptom18')
            ->selectRaw('AVG(simp19) as avg_symptom19')
            ->selectRaw('AVG(simp20) as avg_symptom20')
            ->groupBy('illness_id')
            ->get();

    
            foreach ($results as $result) {
                $illnessId = $result->illness_id;
            
                // Вибираємо всі стовпці, які починаються з "avg_symptom"
                $avgSymptoms = (array)$result;
                $avgSymptoms = array_filter($avgSymptoms, function ($key) {
                    return strpos($key, 'avg_symptom') === 0;
                }, ARRAY_FILTER_USE_KEY);
            
                // Створюємо асоціативний масив для використання в updateOrInsert
                $data = array_merge(['illness_id' => $illnessId], $avgSymptoms);
            
                DB::table('symp_viral_characteristic')->updateOrInsert(
                    ['illness_id' => $illnessId],
                    $data
                );
            }
}

}
