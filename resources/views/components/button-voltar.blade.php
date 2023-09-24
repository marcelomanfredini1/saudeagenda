<!-- resources/views/components/back-button.blade.php -->

@props(['route' => ''])

<a href="{{ route($route) }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
    {{ $slot }}
</a>

