<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar Médico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('doctors.update', $doctor->id) }}">
                        @csrf
                        @method('PUT')

                        @if(session('error'))
                            <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded" role="alert">
                                <strong class="font-bold">Erro!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif

                        <!-- Nome do Médico -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nome do Médico')" />
                            <x-input-edit name="name" :value="old('name', $doctor->name)" class="" />
                        </div>

                        <!-- Especialidade do Médico -->
                        <div class="mt-4">
                            <x-label for="specialty" :value="__('Especialidade do Médico')" />
                            <x-input-edit name="specialty" :value="old('specialty', $doctor->specialty)" class="" />
                        </div>

                        <!-- Email do Médico -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email do Médico')" />
                            <x-input-edit name="email" :value="old('email', $doctor->email)" class="" />
                        </div>

                        <!-- Telefone do Médico -->
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Telefone do Médico')" />
                            <x-input-edit name="phone" :value="old('phone', $doctor->phone)" class="" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button-voltar route="doctors.index">
                                {{ __('Voltar') }}
                            </x-button-voltar>

                            <x-button class="ml-4">
                                {{ __('Salvar Alterações') }}
                            </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
