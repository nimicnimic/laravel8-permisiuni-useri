<x-jet-action-section>
    <x-slot name="title">
        {{ __('Roluri') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Administrare roluri.') }}
    </x-slot>

    <x-slot name="content">
        <div class="mt-3">
            <x-jet-button wire:click="openAddRoleModal" wire:loading.attr="disabled">
                {{ __('Adaugare rol') }}
            </x-jet-button>
        </div>
        <x-jet-section-border />

        <table class="table table-hover table-bordered">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Slug</th>
                <th scope="col">Descriere Rol</th>
                <th scope="col">Actiuni</th>
            </tr>
            </thead>
            <tbody class="table-white">
                {{-- @dd($roles) --}}

                @foreach ($roles as $key => $dataRow)
                <tr>
                        {{-- @dd($dataRow) --}}
                        <th scope="row">{{ $roles->firstItem() + $key }}</th>
                        <td>{{ $dataRow->name }}</td>
                        <td>{{ $dataRow->label }}</td>
                        <td class="d-flex justify-content-evenly">
                            <x-jet-success-button
                                wire:click="openAddRoleModal({{ $dataRow }})" wire:loading.attr="disabled"
                                class="btn btn-success text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                                Editeaza
                            </x-jet-success-button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $roles->links() }}

        <x-jet-dialog-modal wire:model="modalOpen">
            {{-- <form wire:submit.prevent="saveRole"> --}}
                <x-jet-action-message on="saved">
                    {{ __('Rol salvat.') }}
                </x-jet-action-message>
                <x-slot name="title">
                    {{ __('Defineste un nou rol') }}
                </x-slot>

                <x-slot name="content">
                    {{-- @dd($name) --}}
                    <div class="mb-3 form-floating">
                        <x-jet-input type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" id="name-role" wire:model="name" />
                        <x-jet-label for="name-role" value="{{ __('Slug') }}" />
                        <x-jet-input-error for="name" />
                    </div>
                    <div class="mb-3 form-floating">
                        <x-jet-input type="text" class="{{ $errors->has('label') ? 'is-invalid' : '' }}" id="label-role" wire:model="label"/>
                        <x-jet-label for="label-role" value="{{ __('Denumire') }}" />
                        <x-jet-input-error for="label" />
                    </div>
                </x-slot>

                <x-slot name="footer">
                    <x-jet-button wire:click="saveRole" wire:loading.attr="disabled">
                        <div wire:loading wire:target="saveRole" class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        {{ __('Salveaza rol') }}
                    </x-jet-button>
                </x-slot>
            {{-- </form> --}}
        </x-jet-dialog-modal>
    </x-slot>


</x-jet-action-section>
