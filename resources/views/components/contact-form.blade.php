<?php
use function Livewire\Volt\{form};
use App\Livewire\Forms\ContactForm;

form(ContactForm::class);

$save = function () {
    $this->form->email();
};
?>

<div class="flex w-96 flex-col">
    <form wire:submit="save" class="flex flex-col gap-4">
        <div>
            <x-text-input type="text" wire:model="form.name" placeholder="Vollständiger Name"></x-text-input>
            @error('form.name')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-text-input type="email" wire:model="form.email" placeholder="Email-Adresse"></x-text-input>
            @error('form.email')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-text-input type="text" wire:model="form.mobile" placeholder="Natelnummer"></x-text-input>
            @error('form.mobile')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-text-input type="text" wire:model="form.landline" placeholder="Festnetz"></x-text-input>
            @error('form.landline')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-text-input type="text" wire:model="form.message" placeholder="Nachricht"></x-text-input>
            @error('form.message')
                <span class="text-red-400">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2 flex justify-end">
            <x-primary-button>Senden</x-primary-button>
        </div>
    </form>
</div>
