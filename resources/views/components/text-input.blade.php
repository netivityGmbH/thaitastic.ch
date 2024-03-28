@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'block w-full rounded-md bg-gray-800 text-white placeholder-gray-400 focus:border-#FDFADB focus:bg-#FDFADB focus:ring-2 focus:ring-#FDFADB focus:ring-offset-0 transition ease-in-out duration-150',
]) !!}>
