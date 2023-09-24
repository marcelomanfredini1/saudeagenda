<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do Médico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><strong>ID:</strong> {{ $doctor->id }}</p>
                    <p><strong>Nome:</strong> {{ $doctor->name }}</p>
                    <p><strong>Especialidade:</strong> {{ $doctor->specialty }}</p>
                    <p><strong>Email:</strong> {{ $doctor->email }}</p>
                    <p><strong>Telefone:</strong> {{ $doctor->phone }}</p>
                    <p><strong>Criado em:</strong> {{ $doctor->created_at->format('d/m/Y H:i:s') }}</p>
                    <p><strong>Atualizado em:</strong> {{ $doctor->updated_at->format('d/m/Y H:i:s') }}</p>

                    <div class="mt-4">
                        {{-- <a href="{{ route('doctors.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Voltar</a> --}}
                        <x-button-voltar route="doctors.index">
                            {{ __('Voltar') }}
                        </x-button-voltar>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
