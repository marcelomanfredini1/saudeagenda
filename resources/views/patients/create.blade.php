<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('patients.store') }}">
                        @csrf

                        <div class="mt-4">
                            <x-label for="name" :value="__('Nome do Paciente')" />
                            <x-input-create id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="email" :value="__('Email do Paciente')" />
                            <x-input-create id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
                        </div>

                        <div class="mt-4">
                            <x-label for="phone" :value="__('Telefone do Paciente')" />
                            <x-input-create id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"  />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            {{-- <a href="{{ route('patients.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Voltar</a> --}}


                            <x-button-voltar route="patients.index">
                                {{ __('Voltar') }}
                            </x-button-voltar>

                            <x-button class="ml-4">
                                {{ __('Cadastrar Paciente') }}
                            </x-button>

                            {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cadastrar Paciente</button> --}}

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
