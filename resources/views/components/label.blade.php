@props(['value'])

<label {{ $attributes->merge(['class' => 'block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nim']) }}>
    {{ $value ?? $slot }}
</label>
