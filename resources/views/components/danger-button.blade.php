<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-lg btn-outline-danger flex-rows flex-nowrap d-flex align-items-center']) }}>
    {{ $slot }}
</button>
