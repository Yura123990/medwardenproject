<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Анкета для визначення вірусного захворювання') }}
        </h2>
    </x-slot>
<form action="#" method="post" class="ml-16">
<table>
    <tr>
        <td>Нежить</td>
        <td><select name="sl1">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Лихоманка</td>
        <td><select name="sl2">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Кашель</td>
        <td><select name="sl3">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Сильний біль у тілі</td>
        <td><select name="sl4">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Головний біль</td>
        <td><select name="sl5">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Кон'юнктивіт</td>
        <td><select name="sl6">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Збільшення лімфовузлів</td>
        <td><select name="sl7">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Слабкість у тілі</td>
        <td><select name="sl8">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Блювання</td>
        <td><select name="sl9">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Ангіна</td>
        <td><select name="sl10">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Втрата апетиту</td>
        <td><select name="sl11">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Чхання</td>
        <td><select name="sl12">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Висока температура</td>
        <td><select name="sl13">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
        <tr>
        <td>Діарея</td>
        <td><select name="sl14">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
    <tr>
        <td>Біль у животі</td>
        <td><select name="sl15">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
    <tr>
        <td>Втрата нюху</td>
        <td><select name="sl16">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
    <tr>
        <td>Втрата смаку</td>
        <td><select name="sl17">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
    <tr>
        <td>Втрата орієнтації в просторі</td>
        <td><select name="sl18">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
    <tr>
        <td>Біль у м'язах і суглобах</td>
        <td><select name="sl19">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
    <tr>
        <td>Біль у грудях</td>
        <td><select name="sl20">
            <option value=0>немає</option>
            <option value=1>дуже низький</option>
            <option value=2>низький</option>
            <option value=3>середній</option>
            <option value=4>високий</option>
            <option value=5>дуже високий</option>
        </select></td>
    </tr>
</table>
    <button class="my-4" name="sb">
        {{ __('Відправити дані') }}
    </button>
</form>
</x-app-layout>
