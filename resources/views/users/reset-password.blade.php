<x-jet-form-section submit="resetPassword">
    <x-slot name="title">
        {{ __('Parola') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Reseteaza parola utilizatorului') }}
    </x-slot>

    <x-slot name="form" class="row g-3 needs-validation" novalidate>

        <x-jet-action-message on="saved">
            {{ __('Date salvate.') }}
        </x-jet-action-message>

        <x-slot name="actions">
            <div class="d-flex align-items-baseline">
                TODO: resetarea parolei de catre admin
                <x-jet-button>
                    <div wire:loading class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    {{ __('Reseteaza parola') }}
                </x-jet-button>
            </div>
        </x-slot>
    </x-slot>
</x-jet-form-section>


