<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-800 leading-tight">
            {{ __('Записи опитувальника респіраторних захворювань') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                @if(count($userSymptoms) > 0)
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Дата</th>
                                <!-- Додайте заголовки для симптомів тут -->
                                @foreach ($symptoms as $symptom)
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ $symptom }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($userSymptoms as $record)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $record->created_at }}</td>
                                    <!-- Додайте відображення значень симптомів для кожного запису тут -->
                                    @for ($i = 1; $i <= 23; $i++)
                                        <td class="py-2 px-4 border-b">{{ getSymptomText($record->{"simp{$i}"}) }}</td>
                                    @endfor
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Ви ще не маєте жодного вірусного запису.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

@php
function getSymptomText($value) {
    if ($value == 0) {
        return 'Немає';
    } elseif ($value <= 0.2) {
        return 'Дуже низький';
    } elseif ($value <= 0.4) {
        return 'Низький';
    } elseif ($value <= 0.6) {
        return 'Середній';
    } elseif ($value <= 0.8) {
        return 'Високий';
    } else {
        return 'Дуже високий';
    }
}
@endphp