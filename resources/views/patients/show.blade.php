<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><strong>ID:</strong> {{ $patient->id }}</p>
                    <p><strong>Nome:</strong> {{ $patient->name }}</p>
                    <p><strong>Email:</strong> {{ $patient->email }}</p>
                    <p><strong>Telefone:</strong> {{ $patient->phone }}</p>
                    <p><strong>Criado em:</strong> {{ $patient->created_at->format('d/m/Y H:i:s') }}</p>
                    <p><strong>Atualizado em:</strong> {{ $patient->updated_at->format('d/m/Y H:i:s') }}</p>

                    <div class="mt-4">
                        {{-- <a href="{{ route('patients.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Voltar</a> --}}
                        <x-button-voltar route="patients.index">
                            {{ __('Voltar') }}
                        </x-button-voltar>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
