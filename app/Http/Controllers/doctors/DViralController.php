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

    for ($i = 1; $i <= 23; $i++) {
        $weight = $request->input("symptom{$i}_weight");
        $intensity = $request->input("symptom{$i}_intensity")/10;

        $characteristicFunction = $coefficient * $weight * $intensity;
        $symptoms["simp{$i}"] = $characteristicFunction;
        $symptoms["simp{$i}_k"] = $intensity;
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
            ->selectRaw('AVG(simp1_k) as avg_symptom1_k')
            ->selectRaw('AVG(simp2) as avg_symptom2')
            ->selectRaw('AVG(simp2_k) as avg_symptom2_k')
            ->selectRaw('AVG(simp3) as avg_symptom3')
            ->selectRaw('AVG(simp3_k) as avg_symptom3_k')
            ->selectRaw('AVG(simp4) as avg_symptom4')
            ->selectRaw('AVG(simp4_k) as avg_symptom4_k')
            ->selectRaw('AVG(simp5) as avg_symptom5')
            ->selectRaw('AVG(simp5_k) as avg_symptom5_k')
            ->selectRaw('AVG(simp6) as avg_symptom6')
            ->selectRaw('AVG(simp6_k) as avg_symptom6_k')
            ->selectRaw('AVG(simp7) as avg_symptom7')
            ->selectRaw('AVG(simp7_k) as avg_symptom7_k')
            ->selectRaw('AVG(simp8) as avg_symptom8')
            ->selectRaw('AVG(simp8_k) as avg_symptom8_k')
            ->selectRaw('AVG(simp9) as avg_symptom9')
            ->selectRaw('AVG(simp9_k) as avg_symptom9_k')
            ->selectRaw('AVG(simp10) as avg_symptom10')
            ->selectRaw('AVG(simp10_k) as avg_symptom10_k')
            ->selectRaw('AVG(simp11) as avg_symptom11')
            ->selectRaw('AVG(simp11_k) as avg_symptom11_k')
            ->selectRaw('AVG(simp12) as avg_symptom12')
            ->selectRaw('AVG(simp12_k) as avg_symptom12_k')
            ->selectRaw('AVG(simp13) as avg_symptom13')
            ->selectRaw('AVG(simp13_k) as avg_symptom13_k')
            ->selectRaw('AVG(simp14) as avg_symptom14')
            ->selectRaw('AVG(simp14_k) as avg_symptom14_k')
            ->selectRaw('AVG(simp15) as avg_symptom15')
            ->selectRaw('AVG(simp15_k) as avg_symptom15_k')
            ->selectRaw('AVG(simp16) as avg_symptom16')
            ->selectRaw('AVG(simp16_k) as avg_symptom16_k')
            ->selectRaw('AVG(simp17) as avg_symptom17')
            ->selectRaw('AVG(simp17_k) as avg_symptom17_k')
            ->selectRaw('AVG(simp18) as avg_symptom18')
            ->selectRaw('AVG(simp18_k) as avg_symptom18_k')
            ->selectRaw('AVG(simp19) as avg_symptom19')
            ->selectRaw('AVG(simp19_k) as avg_symptom19_k')
            ->selectRaw('AVG(simp20) as avg_symptom20')
            ->selectRaw('AVG(simp20_k) as avg_symptom20_k')
            ->selectRaw('AVG(simp21) as avg_symptom21')
            ->selectRaw('AVG(simp21_k) as avg_symptom21_k')
            ->selectRaw('AVG(simp22) as avg_symptom22')
            ->selectRaw('AVG(simp22_k) as avg_symptom22_k')
            ->selectRaw('AVG(simp23) as avg_symptom23')
            ->selectRaw('AVG(simp23_k) as avg_symptom23_k')
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
