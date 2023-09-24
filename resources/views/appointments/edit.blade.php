<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Editar Consulta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <form method="POST" action="{{ route('appointments.update', $appointment->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- ID do Agendamento -->
                        <div class="mt-4">
                            <x-label for="doctor_id" :value="__('Médico')" />
                            <select name="doctor_id" id="doctor_id" class="block w-full px-4 py-2 mt-1 border-gray-300 rounded-md rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ">
                                    <option value="">Selecione...</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>{{ $doctor->name .' - '. $doctor->specialty }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="patient_id" :value="__('Paciente')" />
                            <select name="patient_id" id="patient_id" class="block w-full px-4 py-2 mt-1 border-gray-300 rounded-md rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500 ">
                                    <option value="">Selecione...</option></option>
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}" {{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>{{ $patient->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="appointment_datetime" :value="__('Data da Consulta')" />
                            <x-input-create id="appointment_datetime" class="block w-full mt-1" type="datetime-local" name="appointment_datetime" value="{{ $appointment->appointment_datetime }}" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button-voltar route="appointments.index">
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
