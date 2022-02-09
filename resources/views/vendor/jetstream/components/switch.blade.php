<div class="mb-3 form-check form-switch">
    <input {!! $attributes->merge(['class' => 'form-check-input']) !!} type="checkbox" role="switch">
    <x-jet-label for="{{ $id }}" class="form-check-label"> {{ $slot }}</x-jet-label>
</div>
