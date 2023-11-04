<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Анкета для визначення важкості депресії') }}
        </h2>
    </x-slot>
    @if (isset($total_anx) && isset($total_depr))
    <div class="bg-green-100 p-4 rounded mb-4">
        <h2 class="text-xl text-yellow-800 font-bold font-mono">Ваш рівень тривожності: 
            @if ($total_anx >= 0 && $total_anx <= 7 )
                <span class="text-green-800 font-bold">«норма» (відсутність достовірно виражених симптомів тривоги)</span>
            @elseif ($total_anx > 7 && $total_anx <= 10 )
                <span class="text-yellow-800 font-bold">субклінічно виражена тривога</span>
            @elseif ($total_anx > 11)
                <span class="text-red-800 font-bold">клінічно виражена тривога</span>
            @endif</h2>
        <h2 class="text-xl text-blue-800 font-sans font-semibold">Рівень депресії:  
            @if ($total_depr >= 0 && $total_depr <= 7)
                <span class="text-green-600 font-serif">«норма» (відсутність достовірно виражених симптомів депресії)</span>
            @elseif ($total_depr > 7 && $total_depr <= 10)
                <span class="text-yellow-800 font-serif">cубклінічно виражена депресія</span>
            @elseif ($total_depr > 11)
                <span class="text-red-800 font-serif">клінічно виражена депресія</span>
            @endif
        </h2>
    </div>
    @endif

    <form action="#" method="POST" class="py-4 ml-16 mr-16">
        @csrf
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">1. Я відчуваю напругу, мені не по собі</label>
            <select name="sl1" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">зовсім не відчуваю</option>
                <option value="1">час від часу, іноді</option>
                <option value="2">часто</option>
                <option value="3">постійно</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl2">2. Я відчуваю страх, здається, що щось жахливе може ось-ось статися</label>
            <select name="sl2" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">зовсім не відчуваю</option>
                <option value="1">іноді, але це мене не турбує</option>
                <option value="2">так, це так, але страх не дуже великий</option>
                <option value="3">безумовно це так, і страх дуже великий</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl3">3. Неспокійні думки крутяться у мене в голові</label>
            <select name="sl3" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">тільки іноді</option>
                <option value="1">іноді і не так часто</option>
                <option value="2">більшу частину часу</option>
                <option value="3">постійно</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl4">4. Я легко можу присісти та розслабитися</label>
            <select name="sl4" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">звичайно, так</option>
                <option value="1">напевно, це так</option>
                <option value="2">іноді, це так</option>
                <option value="3">зовсім не можу</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl5">5. Я відчуваю внутрішню напругу або тремтіння</label>
            <select name="sl5" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">зовсім не відчуваю</option>
                <option value="1">іноді</option>
                <option value="2">часто</option>
                <option value="3">дуже часто</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl6">6. Я відчуваю непосидючість, мені постійно треба рухатися</label>
            <select name="sl6" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">зовсім не відчуваю</option>
                <option value="1">лише певною мірою, це так</option>
                <option value="2">напевно, це так</option>
                <option value="3">безумовно, це так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl7">7. У мене буває раптове відчуття паніки</label>
            <select name="sl7" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">зовсім не відчуваю</option>
                <option value="1">не дуже часто</option>
                <option value="2">часто</option>
                <option value="3">дуже часто</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl8">8. Те, що приносило мені велике задоволення, і зараз викликає в мене таке саме почуття</label>
            <select name="sl8" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">безумовно, це так</option>
                <option value="1">мабуть, це так</option>
                <option value="2">лише дуже малою мірою, це так</option>
                <option value="3">це зовсім не так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl9">9. Я здатний розсміятися і побачити в тій чи іншій події кумедне</label>
            <select name="sl9" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">безумовно, це так</option>
                <option value="1">мабуть, це так</option>
                <option value="2">лише дуже малою мірою, це так</option>
                <option value="3">це зовсім не так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl10">10. Я відчуваю бадьорість</label>
            <select name="sl10" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">безумовно, це так</option>
                <option value="1">мабуть, це так</option>
                <option value="2">лише дуже малою мірою, це так</option>
                <option value="3">це зовсім не так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl11">11. Мені здається, що я почав усе робити дуже повільно</label>
            <select name="sl11" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">безумовно, це так</option>
                <option value="1">мабуть, це так</option>
                <option value="2">лише дуже малою мірою, це так</option>
                <option value="3">це зовсім не так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl12">12. Я не стежу за своєю зовнішністю</label>
            <select name="sl12" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">безумовно, це так</option>
                <option value="1">мабуть, це так</option>
                <option value="2">лише дуже малою мірою, це так</option>
                <option value="3">це зовсім не так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl13">13. Я вважаю, що мої справи (заняття, захоплення) можуть принести мені задоволення</label>
            <select name="sl13" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">безумовно, це так</option>
                <option value="1">мабуть, це так</option>
                <option value="2">лише дуже малою мірою, це так</option>
                <option value="3">це зовсім не так</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl14">14. Я можу отримати задоволення від хорошої книги, радіо або телепрограми</label>
            <select name="sl14" class="bg-white hover:bg-slate-100 border p-2 w-full">
                <option value="0">безумовно, це так</option>
                <option value="1">мабуть, це так</option>
                <option value="2">лише дуже малою мірою, це так</option>
                <option value="3">це зовсім не так</option>
            </select>
        </div>
    
        <button type="submit" name="sb" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
    
    
</x-app-layout>
