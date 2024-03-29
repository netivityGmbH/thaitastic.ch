<?php
use function Livewire\Volt\{form};
use App\Livewire\Forms\ContactForm;

form(ContactForm::class);

$save = function () {
    $this->form->email();
};
?>

<div class="flex w-96 flex-col px-4 sm:px-0">
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
            <x-primary-button>Senden</x-primary-button>
        </div>
    </form>
</div>
