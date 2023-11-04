<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-800 leading-tight">
            {{ __('Рівень власного стресу та стресостійкості') }}
        </h2>
    </x-slot>
    @if (isset($total))
    <div class="bg-yellow-100 p-4 rounded mb-4">
        <h2 class="text-2xl text-blue-800 font-semibold">Ваш рівень стресу:  
            @if ($total >= 7 && $total <= 14)
                <span class="text-red-800 font-semibold">високий</span>
            @elseif ($total > 14 && $total <= 19)
                <span class="text-yellow-800 font-semibold">середній, з тенденцією до низького</span>
            @elseif ($total > 19 && $total <= 24)
                <span class="text-green-600 font-semibold">низький</span>
            @elseif ($total > 24 && $total)
                <span class="text-green-800 font-semibold">Вам не загрожує</span>
            @endif
        </h2>
    </div>
    @endif

    <form action="{{ route('stress') }}" method="POST" class="py-4 ml-16 mr-16">
        @csrf
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl1">Мабуть я людина нервова</label>
            <select name="sl1" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=1>Так, згоден</option>
                <option value=2>Швидше згоден</option>
                <option value=3>Швидше не згоден</option>
                <option value=4>Ні, не згоден</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl2">Я дуже турбуюся про свою роботу</label>
            <select name="sl2" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=1>Так, згоден</option>
                <option value=2>Швидше згоден</option>
                <option value=3>Швидше не згоден</option>
                <option value=4>Ні, не згоден</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl3">Моя повсякденна діяльність викликає велику напругу.</label>
            <select name="sl3" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=1>Так, згоден</option>
                <option value=2>Швидше згоден</option>
                <option value=3>Швидше не згоден</option>
                <option value=4>Ні, не згоден</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl4">Я часто відчуваю нервову напругу</label>
            <select name="sl4" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=1>Так, згоден</option>
                <option value=2>Швидше згоден</option>
                <option value=3>Швидше не згоден</option>
                <option value=4>Ні, не згоден</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl5">Даючи обіцянки людям, я часто відчуваю нервову напругу.</label>
            <select name="sl5" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=1>Так, згоден</option>
                <option value=2>Швидше згоден</option>
                <option value=3>Швидше не згоден</option>
                <option value=4>Ні, не згоден</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl6">До кінця дня я зовсім виснажений фізично та психологічно.</label>
            <select name="sl6" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=1>Так, згоден</option>
                <option value=2>Швидше згоден</option>
                <option value=3>Швидше не згоден</option>
                <option value=4>Ні, не згоден</option>
            </select>
        </div>
    
        <div class="mb-4">
            <label class="block font-semibold mb-2" for="sl7">У моїй сім'ї часто виникають напружені взаємини.</label>
            <select name="sl7" class="bg-white hover-bg-slate-100 border p-2 w-full">
                <option value=1>Так, згоден</option>
                <option value=2>Швидше згоден</option>
                <option value=3>Швидше не згоден</option>
                <option value=4>Ні, не згоден</option>
            </select>
        </div>
    
        <button type="submit" name="sb" value="1" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-700">
            {{ __('Відправити дані') }}
        </button>
    </form>
    
    
</x-app-layout>
