@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-primary font-serif']) }}>
    {{ $value ?? $slot }}
</label>
