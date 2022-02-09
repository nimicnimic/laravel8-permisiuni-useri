<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Utilizatori') }}
        </h2>
    </x-slot>

    <a href="{{ route('users.create') }}" class="btn text-white bg-primary mb-3 float-end">Adauga Utilizator</a>

    <x-jet-table :data="$users" />

</x-app-layout>
