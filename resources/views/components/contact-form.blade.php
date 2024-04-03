<?php
use function Livewire\Volt\{form};
use App\Livewire\Forms\ContactForm;

form(ContactForm::class);

$save = function () {
    $this->form->email();

    return redirect()->back()->with('success', 'Thank you for subscribing!');
};
?>

<div class="flex w-96 flex-col px-4 sm:px-0">
    @if (session('success'))
        <div
            class="[&>svg]:text-foreground relative w-full rounded-lg border border-transparent bg-green-500 p-4 text-white [&:has(svg)]:pl-11 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4">
            <svg class="h-5 w-5 -translate-y-0.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h5 class="mb-1 font-medium leading-none tracking-tight">
                Nachricht wurde erfolgreich gesendet 🎉
            </h5>
            <p class="text-sm opacity-80">
                Wir werden uns in Kürze bei Ihnen melden.
            </p>
        </div>
    @else
        <form wire:submit="save" class="flex flex-col gap-4">
            <div>
                <x-input-label for="name" value="Vollständiger Name" />
                <x-text-input type="text" wire:model="form.name" id="name" />
                @error('form.name')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input type="email" wire:model="form.email" id="email" />
                @error('form.email')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <x-input-label for="mobile" value="Handy" />
                <x-text-input type="text" wire:model="form.mobile" id="mobile" />
                @error('form.mobile')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <x-input-label for="landline" value="Festnetz" />
                <x-text-input type="text" wire:model="form.landline" id="landline" />
                @error('form.landline')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <x-input-label for="message" value="Nachricht" />
                <x-text-area wire:model="form.message" id="message" />
                @error('form.message')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-2 flex justify-end">
                <x-primary-button wire:loading.class="opacity-50">Senden</x-primary-button>
            </div>
        </form>
    @endif
</div>
