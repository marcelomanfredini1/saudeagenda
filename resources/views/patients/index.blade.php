<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pacientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                        Lista de Pacientes
                    </div>
                </div>
                    <div class="p-6 text-left">
                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">Sucesso!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                    <div class="p-6 text-right">
                        <a href="{{ route('patients.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Cadastrar Paciente</a>
                    </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Telefone</th>
                                    <th class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($patients as $patient)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $patient->id }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $patient->name }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $patient->email }}</td>
                                        <td class="px-6 py-4 whitespace-no-wrap">{{ $patient->phone }}</td>
                                        {{-- <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                            <a href="{{ route('patients.edit', $patient->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                        </td> --}}
                                        {{-- <td class="px-6 py-4 whitespace-no-wrap justify-end">
                                            <div class="mt-4">
                                                <a href="{{ route('patients.show', $patient->id) }}" class="text-gray-600 hover:text-gray-900">Detalhes</a>
                                                <a href="{{ route('patients.edit', $patient->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Excluir</button>
                                                </form>
                                            </div>
                                        </td> --}}
                                        <td class="px-6 py-4 whitespace-no-wrap">
                                            <div class="flex items-center">
                                                <a href="{{ route('patients.show', $patient->id) }}" class="text-gray-600 hover:text-gray-900 mr-2"><x-svg-icon-info width="6" height="6" color="currentColor" /></a>
                                                <a href="{{ route('patients.edit', $patient->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2"><x-svg-icon-edit width="6" height="6" color="currentColor" /></a>
                                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" class="inline">
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
    </div>
</x-app-layout>
