<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-lg btn-secondary flex-rows flex-nowrap d-flex align-items-center']) }}>
    {{ $slot }}
</button>
