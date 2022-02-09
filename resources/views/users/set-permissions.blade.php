<x-jet-form-section submit="setPermissions">
    <x-slot name="title">
        {{ __('Permisiuni') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Seteaza permisiunile utilizatorului') }}
    </x-slot>

    <x-slot name="form" class="row g-3 needs-validation" novalidate>

        <x-jet-action-message on="saved">
            {{ __('Date salvate.') }}
        </x-jet-action-message>

        <div class="w-md-75">
            TODO: de facut doua componente cu multiselecturi pentru permisiuni si roluri
        </div>

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
