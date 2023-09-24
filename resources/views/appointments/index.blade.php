@php
use Carbon\Carbon;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Consultas Médicas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
                    <div class="text-2xl">
                        Lista de Consultas
                    </div>
                </div>
                <div class="p-6 text-left">
                    @if(session('success'))
                        <div class="relative px-4 py-3 text-green-700 bg-green-100 border border-green-400 rounded" role="alert">
                            <strong class="font-bold">Sucesso!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="p-6 text-right">
                        <a href="{{ route('appointments.create') }}" class="px-4 py-2 mb-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Cadastrar Consulta</a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">ID</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">Médico</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">Especialidade</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">Paciente</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase bg-gray-50">Data da Consulta</th>
                                <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-center text-gray-500 uppercase bg-gray-50">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($appointments as $appointment)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $appointment->id }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $appointment->doctor->name }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $appointment->doctor->specialty }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $appointment->patient->name }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ Carbon::parse($appointment->appointment_datetime)->format('d/m/Y H:i') }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <a href="{{ route('appointments.show', $appointment->id) }}" class="mr-2 text-gray-600 hover:text-gray-900"><x-svg-icon-info width="6" height="6" color="currentColor" /></a>
                                            <a href="{{ route('appointments.edit', $appointment->id) }}" class="mr-2 text-indigo-600 hover:text-indigo-900"><x-svg-icon-edit width="6" height="6" color="currentColor" /></a>
                                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900"><x-svg-icon-delete width="6" height="6" color="currentColor" /></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
