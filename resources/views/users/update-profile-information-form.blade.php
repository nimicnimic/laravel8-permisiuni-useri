<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Editeaza profil utilizator') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Numele si adresa utilizatorului.') }}
    </x-slot>

    <x-slot name="form" class="row g-3 needs-validation" novalidate>

        <x-jet-action-message on="saved">
            {{ __('Date salvate.') }}
        </x-jet-action-message>
        <div class="w-md-75">

            <div class="mb-3 form-floating">
                <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-label for="name" value="{{ __('Nume si prenume / Denumire') }}" />
                <x-jet-input-error for="name" />
                <div class="valid-feedback">
                    Este in regula!
                </div>
            </div>
            <div class="mb-3 form-floating">
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model.defer="state.email" autocomplete="email" />
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input-error for="email" />
                <div class="valid-feedback">
                    Este in regula!
                </div>
            </div>
            <div class="mb-3 form-floating">
                <x-jet-input id="adresa" type="text" class="{{ $errors->has('adresa') ? 'is-invalid' : '' }}" wire:model.defer="state.adresa" autocomplete="adresa" />
                <x-jet-label for="adresa" value="{{ __('Adresa') }}" />
                <x-jet-input-error for="adresa" />
                <div class="valid-feedback">
                    Este in regula!
                </div>
            </div>
            <div class="mb-3 form-floating">
                <x-jet-input id="tara" type="text" class="{{ $errors->has('tara') ? 'is-invalid' : '' }}" wire:model.defer="state.tara" autocomplete="tara" />
            <x-jet-label for="tara" value="{{ __('Tara') }}" />
            <x-jet-input-error for="tara" />
            <div class="valid-feedback">
                Este in regula!
            </div>
            </div>
            <div class="mb-3 form-floating">
                <x-jet-input id="telefon" type="text" class="{{ $errors->has('telefon') ? 'is-invalid' : '' }}" wire:model.defer="state.telefon" autocomplete="telefon" />
                <x-jet-label for="telefon" value="{{ __('Telefon') }}" />
                <x-jet-input-error for="telefon" />
                <div class="valid-feedback">
                    Este in regula!
                </div>
            </div>

            <div class="mb-3 form-floating">
                <x-jet-select id="judet" :options="$judete" class="{{ $errors->has('judet') ? 'is-invalid' : '' }}" wireModel="state.judet" autocomplete="judet" name="judet">Judet:</x-jet-select>
                <x-jet-input-error for="judet" />
                <div class="invalid-feedback">
                    Trebuie sa alegeti un judet.
                </div>
            </div>
            <div class="mb-3 form-floating">
                <x-jet-select id="localitate" :options="$judete" class="{{ $errors->has('localitate') ? 'is-invalid' : '' }}" wireModel="state.localitate" autocomplete="localitate" name="localitate">Localitate:</x-jet-select>
                <x-jet-input-error for="localitate" />
                <div class="invalid-feedback">
                    Trebuie sa alegeti o localitate.
                </div>
            </div>
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
