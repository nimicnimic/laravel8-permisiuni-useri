@props(['options', 'id' , 'name', 'wireModel'])

<select class="form-select" id="{{ $id ?? '' }}" name="{{ $name }}" wire:model.defer="{{ $wireModel }}" required>
    <option selected value="">Alege ...</option>
    @if (isset($options))
        @foreach ($options as $keyOption => $valOption)
            <option value="{{ $keyOption }}">{{ $valOption }}</option>
        @endforeach
    @endif
</select>
<x-jet-label for="{{ $id ?? ''}}" {{ $attributes->merge(['class' => 'form-label']) }}>{{ $slot }}</x-jet-label>

