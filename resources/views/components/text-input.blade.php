@props(['disabled' => false])

<input @disabled($disabled)
    {{ $attributes->merge(['class' => 'bg-[#ebf2fa] border-none rounded-md text-[#333333] ']) }}>
