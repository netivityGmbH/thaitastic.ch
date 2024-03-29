<?php
use function Livewire\Volt\{state};
use App\Models\MenuItem;

state(['menu_items' => MenuItem::all()]);
?>

<div>
    <ul class="flex flex-col gap-8 font-serif text-primary">
        @foreach ($menu_items as $item)
            <li wire:key="{{ $item->id }}" class="px-4">
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold">
                        {{ $item->name }}
                    </span>

                    <span class="tracking-wide underline underline-offset-4">
                        {{ $item->formatted_price }}
                    </span>
                </div>

                <div class="flex justify-start">
                    <span>{{ $item->description }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</div>
