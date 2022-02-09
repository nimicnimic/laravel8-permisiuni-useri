<x-jet-form-section submit="updateState">
    <x-slot name="title">
        {{ __('Actualizare stare utilizator') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Alege cont activ sau inactiv') }}
    </x-slot>

    <x-slot name="form" class="row g-3 needs-validation" novalidate>

        <x-jet-action-message on="saved">
            {{ __('Date salvate.') }}
        </x-jet-action-message>

        <x-jet-switch id="contActiv" wire:model.defer="state.active">
            Cont activ ?
        </x-jet-switch>

        <x-slot name="actions">
            <div class="d-flex align-items-baseline">
                <x-jet-button>
                    <div wire:loading class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    {{ __('Salveaza') }}
                </x-jet-button>
            </div>
        </x-slot>
    </x-slot>
</x-jet-form-section>


