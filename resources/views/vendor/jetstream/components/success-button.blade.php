<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-success text-uppercase text-white']) }}>
    {{ $slot }}
</button>
