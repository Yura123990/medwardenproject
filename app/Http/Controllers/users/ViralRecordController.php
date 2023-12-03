<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ViralRecordController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $userSymptoms = DB::table('symp_viral_user')->where('user_id', $userId)->get();

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
            "Ангіна",
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

        return view('records.viral-record', compact(['userSymptoms', 'symptoms']));
    }
}
