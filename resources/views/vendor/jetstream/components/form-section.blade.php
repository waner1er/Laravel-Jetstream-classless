@props(['submit'])

<div>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <div>
        <form wire:submit.prevent="{{ $submit }}">
            <div>
                <div>
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div>
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
