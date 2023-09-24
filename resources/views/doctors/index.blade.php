<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Médicos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                        Lista de Médicos
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
                        <a href="{{ route('doctors.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Cadastrar Médico</a>
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Especialidade</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Telefone</th>
                                <th class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($doctors as $doctor)
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $doctor->id }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $doctor->name }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $doctor->specialty }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $doctor->email }}</td>
                                    <td class="px-6 py-4 whitespace-no-wrap">{{ $doctor->phone }}</td>
                                    {{-- <td class="px-6 py-4 whitespace-no-wrap justify-end">
                                        <div class="mt-4 inline">
                                            <a href="{{ route('doctors.show', $doctor->id) }}" class="text-gray-600 hover:text-gray-900"><x-svg-icon-info width="6" height="6" color="currentColor" /></a>
                                            <a href="{{ route('doctors.edit', $doctor->id) }}" class="text-indigo-600 hover:text-indigo-900"><x-svg-icon-edit width="6" height="6" color="currentColor" /></a>
                                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 ml-2"><x-svg-icon-delete width="6" height="6" color="currentColor" /></button>
                                            </form>
                                        </div>
                                    </td> --}}
                                    <td class="px-6 py-4 whitespace-no-wrap">
                                        <div class="flex items-center">
                                            <a href="{{ route('doctors.show', $doctor->id) }}" class="text-gray-600 hover:text-gray-900 mr-2"><x-svg-icon-info width="6" height="6" color="currentColor" /></a>
                                            <a href="{{ route('doctors.edit', $doctor->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-2"><x-svg-icon-edit width="6" height="6" color="currentColor" /></a>
                                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="inline">
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
