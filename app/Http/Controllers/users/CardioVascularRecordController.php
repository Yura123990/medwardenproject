<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CardioVascularRecordController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $userSymptoms = DB::table('symp_cardio_user')->where('user_id', $userId)->get();

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

        return view('records.cardio-record', compact(['userSymptoms', 'symptoms']));
    }
}
