<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary flex-rows flex-nowrap d-flex align-items-center']) }}>
    @if ($type == 'submit')
        <span wire:loading class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
    @endif
    {{ $slot }}
</button>
