<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Profil utilizator') }}
        </h2>
    </x-slot>
    <div>
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('users.update-profile-information-form')

            <x-jet-section-border />
            @endif

        @livewire('users.update-state')

        @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <x-jet-section-border />
            @livewire('users.two-factor-authentication-form')

            <x-jet-section-border />
        @endif

        @livewire('users.reset-password')
        <x-jet-section-border />

        @livewire('users.set-permissions')
        <x-jet-section-border />

        <div class="d-flex align-items-baseline">
            <x-jet-a-button href="{{ route('users') }}" class="float-end">
                {{ __('Inapoi') }}
            </x-jet-a-button>
        </div>
    </div>
</x-app-layout>
