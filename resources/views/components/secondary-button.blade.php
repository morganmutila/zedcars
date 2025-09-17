<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-secondary flex-rows flex-nowrap d-flex align-items-center']) }}>
    {{ $slot }}
</button>
