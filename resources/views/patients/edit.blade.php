<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('patients.update', $patient->id) }}">
                        @csrf
                        @method('PUT')

                        @if(session('error'))
                            <div class="bg-green-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Erro!</strong>
                                <span class="block sm:inline">{{ session('error') }}</span>
                            </div>
                        @endif

                        <!-- Nome do Paciente -->
                        <div class="mt-4">
                            {{-- <label for="name" class="block text-gray-600 text-sm font-semibold mb-2">Nome do Paciente</label> --}}
                            <x-label for="name" :value="__('Nome')" />
                            {{-- <input id="name" type="text" name="name" value="{{ old('name', $patient->name) }}"   class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm @error('name') border-red-500 @enderror"> --}}
                            <x-input-edit name="name" :value="old('name', $patient->name)" class="" />

                            {{-- <x-input id="name" type="text" name="name" :value="old('name', $patient->name)" class="w-full px-4 py-2 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm @error('name') border-red-500 @enderror"  /> --}}
                            {{-- @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror --}}
                        </div>

                        <!-- Email do Paciente -->
                        <div class="mt-4">
                            {{-- <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Email do Paciente</label> --}}
                            <x-label for="email" :value="__('Email')" />
                            <x-input-edit name="email" :value="old('email', $patient->email)" class="" />
                            {{-- <input id="email" type="email" name="email" value="{{ old('email', $patient->email) }}"  class="w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror --}}
                        </div>

                        <!-- Telefone do Paciente -->
                        <div class="mt-4">
                            {{-- <label for="phone" class="block text-gray-600 text-sm font-semibold mb-2">Telefone do Paciente</label>
                            <input id="phone" type="text" name="phone" value="{{ old('phone', $patient->phone) }}" class="w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror --}}
                            <x-label for="phone" :value="__('Telefone')" />
                            <x-input-edit name="phone" :value="old('phone', $patient->phone)" class="" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            {{-- <a href="{{ route('patients.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Voltar</a> --}}


                            <x-button-voltar route="patients.index">
                                {{ __('Voltar') }}
                            </x-button-voltar>

                            <x-button class="ml-4">
                                {{ __('Salvar Alterações') }}
                            </x-button>

                            {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cadastrar Paciente</button> --}}

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
