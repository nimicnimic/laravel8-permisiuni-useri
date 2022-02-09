<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Activarea autentificarii in doi factori este necesara pentru accesul in aplicatie') }}
        </h2>
    </x-slot>
    <div>

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            @livewire('profile.two-factor-authentication-form')
            <x-jet-section-border />
        @endif

    </div>
</x-app-layout>
