<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для діагностики психоемоційної напруги') }}
        </h2>
    </x-slot>
    @if (isset($total)&&isset($total_lie))
    <div class="bg-green-100 p-4 rounded mb-4">
        @if ($total_lie >= 3)<h2 class="text-xl text-yellow-800 font-bold font-mono">Рівень брехливості у відповідях: <span class="text-red-800 font-bold">високий</span></h2>@endif
        <h2 class="text-xl text-blue-800 font-mono">Рівень тривожності:  
            @if ($total >= 1 && $total <= 8)
                <span class="text-green-600 font-serif">низький</span>
            @elseif ($total >= 9 && $total <= 16)
                <span class="text-green-800 font-serif">середній, з тенденцією до низького</span>
            @elseif ($total >= 17 && $total <= 24)
                <span class="text-yellow-800 font-serif">середній</span>
            @elseif ($total >= 25 && $total <= 32)
                <span class="text-red-600 font-serif">середній, з тенденцією до високого</span>
            @elseif ($total >= 33 && $total <= 40)
                <span class="text-red-800 font-serif">високий</span>
            @endif
        </h2>
    </div>
    @endif

    <form action="{{ route('psychoemotional') }}" method="POST" class="py-4 ml-16 mr-16">
        @csrf

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl1">1. Я працездатна людина.</label>
            <select name="sl1" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Так</option>
                <option value=0>Ні<</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl2">2. Я завжди виконую свої обіцянки, не зважаючи на те, зручно мені це чи ні.</label>
            <select name="sl2" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Так</option>
                <option value=1>Ні</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl3">3. Зазвичай руки та ноги у мене теплі.</label>
            <select name="sl3" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Так</option>
                <option value=0>Ні</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl4">4. У мене рідко болить голова.</label>
            <select name="sl4" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl5">5. Я впевнений у своїх силах.</label>
            <select name="sl5" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl6">6. Очікування мене нервує.</label>
            <select name="sl6" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl7">7. Іноді мені здається, що я ні на що не здатний.</label>
            <select name="sl7" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

<div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl8">8. Зазвичай я почуваюся здоровою і цілком задоволеною життям людиною.</label>
            <select name="sl8" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl9">9. Мені важко зосередитись на повсякденній роботі.</label>
            <select name="sl9" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl10">10. У дитинстві я завжди негайно та покірно виконував те, що мені доручали..</label>
            <select name="sl10" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl11">11. У мене бувають розлади шлунка 2-3 рази на місяць..</label>
            <select name="sl11" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl12">12. Я часто відчуваю внутрішню напругу та тривогу..</label>
            <select name="sl12" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl13">13. Думаю, що я більш нервовий(-а), ніж інші люди.</label>
            <select name="sl13" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl14">14. Я сором'язлива людина..</label>
            <select name="sl14" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl15">15. Іноді буває, що я говорю про речі, в яких не знаюся.</label>
            <select name="sl15" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl16">16. Я часто червонію, якщо хвилююся.</label>
            <select name="sl16" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl17">17. Я часто засмучуюсь через дрібниці.</label>
            <select name="sl17" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl18">18. У мене бувають болі в серці, пов'язані з хвиляцією(аритмія).</label>
            <select name="sl18" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl19">19. Похмура погода майже завжди погіршує мій настрій.</label>
            <select name="sl19" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl20">20. Не всі люди, яких я знаю, мені подобаються.</label>
            <select name="sl20" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl21">21. Я не можу заснути, якщо мене щось турбує.</label>
            <select name="sl21" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl22">22. Зазвичай я спокійний(-а), і мене важко вивести з себе.</label>
            <select name="sl22" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl23">23. У мене бувають нічні кошмари.</label>
            <select name="sl23" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl24">24. Я схильний приймати все близько до серця.</label>
            <select name="sl24" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl25">25. Якщо я нервуюсь, то сильно потію.</label>
            <select name="sl25" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl26">26. У мене дуже чутливий, неспокійний сон.</label>
            <select name="sl26" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl27">27. В іграх я волію більше вигравати, аніж програвати.</label>
            <select name="sl27" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl28">28. Я більш чутливий, ніж більшість інших людей.</label>
            <select name="sl28" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl29">29. У мене немає відчуття відпочинку після сну.</label>
            <select name="sl29" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl30">30. Буває, що нескромні жарти та гостроти викликають у мене сміх.</label>
            <select name="sl30" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl31">31. Я постійно стурбований своїми службовими справами чи фінансами.</label>
            <select name="sl31" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl32">32. Я насторожено ставлюся до деяких людей, хоча знаю, що вони не можуть завдати мені шкоди.</label>
            <select name="sl32" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl33">33. Іноді здається, що мої проблеми нерозв'язні.</label>
            <select name="sl33" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl34">34. Я легко приходжу в замішання.</label>
            <select name="sl34" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl35">35. Я волію ухилятися від конфліктів та скрутних положень.</label>
            <select name="sl35" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl36">36. У мене бувають напади нудоти, не пов'язані з їдою.</label>
            <select name="sl36" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl37">37. Я швидко освоююсь у новій обстановці.</label>
            <select name="sl37" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl38">38. Іноді я почуваюся марною і самотньою людиною.</label>
            <select name="sl38" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl39">39. Іноді мені хочеться вилаятися.</label>
            <select name="sl39" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl40">40. Мене майже завжди турбують можливі невдачі, якщо беруся за нову справу.</label>
            <select name="sl40" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl41">41. Очікування мене нервує.</label>
            <select name="sl41" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl42">42.	У мене набагато менше страхів та побоювань, ніж у інших людей.</label>
            <select name="sl42" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl43">43. Буває, що я відкладаю на завтра те, що можу зробити сьогодні.</label>
            <select name="sl43" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl44">44. Моя робота потребує підвищеної зосередженості.</label>
            <select name="sl44" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl45">45. Я дуже чутливий до змін погоди.</label>
            <select name="sl45" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl46">46. Часто дрібні побутові проблеми викликають роздратування.</label>
            <select name="sl46" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl47">47. Я легко знайомлюся з новими людьми.</label>
            <select name="sl47" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl48">48. Критичні зауваження мене легко ранять і кривдять.</label>
            <select name="sl48" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl49">49. Я постійно турбуюся за здоров'я та благополуччя близьких для мене людей.</label>
            <select name="sl49" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=0>Ні</option>
                <option value=1>Так</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="font-mono block font-bold mb-2 text-xl text-green-800" for="sl50">50. У мене хороша пам'ять.</label>
            <select name="sl50" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value=1>Ні</option>
                <option value=0>Так</option>
            </select>
        </div>

        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
</x-app-layout>
