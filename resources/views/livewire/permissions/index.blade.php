<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Permisiuni') }}
        </h2>
    </x-slot>

    @livewire('permissions.roles')
    <x-jet-section-border />
    @livewire('permissions.permissions')

</x-app-layout>
