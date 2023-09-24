<div>
    <input {{ $attributes->merge(['class' => 'w-full px-4 py-2 rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm ' . ($errors->has($attributes->get('name')) ? 'border-red-500' : '')]) }}
        type="text"  />
</div>
@error($attributes->get('name'))
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
