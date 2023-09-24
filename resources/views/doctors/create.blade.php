<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Médico') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('doctors.store') }}">
                        @csrf

                        <div class="mt-4">
                            <x-label for="name" :value="__('Nome do Médico')" />
                            <x-input-create id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="specialty" :value="__('Especialidade do Médico')" />
                            <x-input-create id="specialty" class="block mt-1 w-full" type="text" name="specialty" :value="old('specialty')" />
                        </div>

                        <div class="mt-4">
                            <x-label for="email" :value="__('Email do Médico')" />
                            <x-input-create id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" />
                        </div>

                        <div class="mt-4">
                            <x-label for="phone" :value="__('Telefone do Médico')" />
                            <x-input-create id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button-voltar route="doctors.index">
                                {{ __('Voltar') }}
                            </x-button-voltar>

                            <x-button class="ml-4">
                                {{ __('Cadastrar Médico') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
