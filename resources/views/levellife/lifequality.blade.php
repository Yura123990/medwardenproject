<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для визначення якості життя') }}
        </h2>
    </x-slot>
    @if (isset($total_psych)&&isset($total_emo)&&isset($total_fiz))
    <div class="bg-yellow-100 p-4 rounded mb-4">
        <h2 class="text-2xl text-blue-800 font-mono">Ваш результат: </h2>

        <h2 class="text-2xl text-green-800">Психічний стан: </h2>
        @if ($total_psych >= 0 && $total_psych <= $max_psych * 0.2)
                <span class="text-green-600 font-semibold">низький</span>
            @elseif ($total_psych > $max_psych * 0.2 && $total_psych <= $max_psych * 0.5)
                <span class="text-green-800 font-semibold">середній</span>
            @elseif ($total_psych > $max_psych * 0.5)
                <span class="text-yellow-800 font-semibold">високий</span>
            @endif рівень
    </div>

    <div class="bg-green-100 p-4 rounded mb-4">
        <h2 class="text-2xl text-green-800">Емоційний стан: </h2>
        @if ($total_emo >= 0 && $total_emo <= $max_emo * 0.2)
                <span class="text-green-600 font-semibold">низький</span>
            @elseif ($total_emo > $max_emo * 0.2 && $total_emo <= $max_emo * 0.5)
                <span class="text-green-800 font-semibold">середній</span>
            @elseif ($total_emo > $max_emo * 0.5)
                <span class="text-yellow-800 font-semibold">високий</span>
            @endif рівень
    </div>

    <div class="bg-red-100 p-4 rounded mb-4">
        <h2 class="text-2xl text-green-800">Фізичний стан: </h2>
        @if ($total_fiz >= 0 && $total_fiz <= $max_fiz * 0.2)
                <span class="text-green-600 font-semibold">низький</span>
            @elseif ($total_fiz > $max_fiz * 0.2 && $total_fiz <= $max_fiz * 0.5)
                <span class="text-green-800 font-semibold">середній</span>
            @elseif ($total_fiz > $max_fiz * 0.5)
                <span class="text-yellow-800 font-semibold">високий</span>
            @endif рівень
    </div>
    @endif

    <form action="{{ route('lifequality') }}" method="POST" class="py-4 ml-16 mr-16">
        @csrf
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">1. Загалом ви оцінили б стан Вашого здоров'я як</label>
            <select name="sl1" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Чудово</option>
                <option value="2">Добре</option>
                <option value="3">Середньо</option>
                <option value="4">Погано</option>
                <option value="5">Жахливо</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl2">2. Як би ви оцінили своє здоров'я зараз порівняно з тим, що було рік тому?</label>
            <select name="sl2" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Значно краще, ніж рік тому</option>
                <option value="2">Дещо краще, ніж рік тому</option>
                <option value="3">Приблизно так, як рік тому</option>
                <option value="4">Дещо гірше, ніж рік тому</option>
                <option value="5">Набагато гірше, ніж рік тому</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl3">3. Стурбовані думки крутяться у мене в голові.</label>
            <select name="sl3" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Повністю згоден(-а)</option>
                <option value="2">Майже згоден(-а)</option>
                <option value="3">згоден(-а) наполовину</option>
                <option value="4">Здебільшого не згоден(-а)</option>
                <option value="5">Не згоден(-а)</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl4">4. Тяжкі фізичні навантаження, такі як біг, підняття тяжкості, заняття силовими видами спорту</label>
            <select name="sl4" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl5">5. Помірні фізичні навантаження, такі як пересунути стіл, попрацювати з пилососом, збирати гриби чи ягоди.</label>
            <select name="sl5" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl6">6. Підняти або нести сумку з продуктами.</label>
            <select name="sl6" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl7">7. Підходити пішки сходами на кілька прольотів.</label>
            <select name="sl7" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl8">8. Підходити пішки сходами на один проліт.</label>
            <select name="sl8" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl9">9. Нахилитися, стати навколішки, сісти навпочіпки.</label>
            <select name="sl9" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl10">10. Пройти відстань більше одного кілометра.</label>
            <select name="sl10" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl11">11. Пройти відстань у кілька кварталів.</label>
            <select name="sl11" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl12">12. Пройти відстань в один квартал.</label>
            <select name="sl12" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl13">13. Самостійно вимитися, одягнутися.</label>
            <select name="sl13" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так, значно обмежує</option>
                <option value="2">Так, трохи обмежує</option>
                <option value="3">Ні, зовсім не обмежує</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl14">14. Чи було за останні 4 тижні, що Ваш фізичний стан викликав труднощі у Вашій роботі або іншій повсякденній діяльності, внаслідок чого.</label>
            <select name="sl14" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так</option>
                <option value="2">Ні</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl15">15. Чи бувало за останні 4 тижні, що Ваш емоційний стан викликав труднощі у Вашій роботі або іншій повсякденній діяльності.</label>
            <select name="sl15" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Так</option>
                <option value="2">Ні</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl16">16. Наскільки Ваш фізичний чи емоційний стан протягом останніх 4 тижнів заважав Вам проводити час із сім'єю, друзями, сусідами чи в колективі?</label>
            <select name="sl16" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Зовсім не заважало</option>
                <option value="2">Трохи</option>
                <option value="3">Помірно</option>
                <option value="4">Сильно</option>
                <option value="5">Дуже сильно</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl17">17. Наскільки сильний фізичний біль Ви відчували за останні 4 тижні?</label>
            <select name="sl17" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value="1">Дуже слабкий</option>
                <option value="2">Слабкий</option>
                <option value="3">Помірно</option>
                <option value="4">Сильний</option>
                <option value="5">Дуже сильний</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl18">18. Якою мірою біль протягом останніх 4 тижнів заважав Вам займатися Вашою нормальною роботою, включаючи роботу поза домом та по дому?</label>
            <select name="sl18" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Зовсім не заважало</option>
                <option value="2">Трохи</option>
                <option value="3">Помірно</option>
                <option value="4">Сильно</option>
                <option value="5">Дуже сильно</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl19">19. Ви відчували себе бадьорим(ою)?</label>
            <select name="sl19" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Увесь час</option>
                <option value="2">Більшу частину часу</option>
                <option value="3">Часто</option>
                <option value="4">Іноді</option>
                <option value="5">Рідко</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl20">20. Ви сильно нервували?</label>
            <select name="sl20" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Увесь час</option>
                <option value="2">Більшу частину часу</option>
                <option value="3">Часто</option>
                <option value="4">Іноді</option>
                <option value="5">Рідко</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl21">21. Ви відчували себе таким пригніченим, що ніщо не могло Вас підбадьорити?</label>
            <select name="sl21" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Увесь час</option>
                <option value="2">Більшу частину часу</option>
                <option value="3">Часто</option>
                <option value="4">Іноді</option>
                <option value="5">Рідко</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl22">22. Ви відчували себе спокійним і умиротвореним?</label>
            <select name="sl22" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Увесь час</option>
                <option value="2">Більшу частину часу</option>
                <option value="3">Часто</option>
                <option value="4">Іноді</option>
                <option value="5">Рідко</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl23">23. Ви відчували себе повним(-ою) сил та енергії?</label>
            <select name="sl23" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Увесь час</option>
                <option value="2">Більшу частину часу</option>
                <option value="3">Часто</option>
                <option value="4">Іноді</option>
                <option value="5">Рідко</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl24">24. Ви відчували себе впалим духом і сумним?</label>
            <select name="sl24" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Увесь час</option>
                <option value="2">Більшу частину часу</option>
                <option value="3">Часто</option>
                <option value="4">Іноді</option>
                <option value="5">Рідко</option>
            </select>
        </div>
        
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl25">25. Ви відчували себе змученим(ий)?</label>
            <select name="sl25" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="1">Увесь час</option>
                <option value="2">Більшу частину часу</option>
                <option value="3">Часто</option>
                <option value="4">Іноді</option>
                <option value="5">Рідко</option>
            </select>
        </div>        

        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
</x-app-layout>
