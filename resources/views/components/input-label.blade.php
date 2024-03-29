@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-sm text-primary font-serif tracking-wide']) }}>
    {{ $value ?? $slot }}
</label>
