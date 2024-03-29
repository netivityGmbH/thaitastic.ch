@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'mt-1 block w-full rounded-md bg-transparent font-serif text-primary placeholder-secondary border border-primary focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50 transition ease-in-out duration-150',
]) !!} rows="4"></textarea>
