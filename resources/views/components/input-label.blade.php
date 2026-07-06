@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-[#e9702a]']) }}>
    {{ $value ?? $slot }}
</label>
