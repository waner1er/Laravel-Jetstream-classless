<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('API Tokens') }}
        </h2>
    </x-slot>

    <div>
        <div>
            @livewire('api.api-token-manager')
        </div>
    </div>
</x-app-layout>
