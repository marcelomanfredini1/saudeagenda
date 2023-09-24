@php
use Carbon\Carbon;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Detalhes da Consulta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><strong>ID:</strong> {{ $appointment->id }}</p>
                    <p><strong>Médico:</strong> {{ $appointment->doctor->name }}</p>
                    <p><strong>Paciente:</strong> {{ $appointment->patient->name }}</p>
                    <p><strong>Data da Consulta:</strong> {{ Carbon::parse($appointment->appointment_datetime)->format('d/m/Y H:i') }}</p>
                    <p><strong>Criado em:</strong> {{ Carbon::parse($appointment->created_at)->format('d/m/Y H:i:s') }}</p>
                    <p><strong>Atualizado em:</strong> {{ Carbon::parse($appointment->updated_at)->format('d/m/Y H:i:s') }}</p>

                    <div class="mt-4">
                        <x-button-voltar route="appointments.index">
                            {{ __('Voltar') }}
                        </x-button-voltar>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
