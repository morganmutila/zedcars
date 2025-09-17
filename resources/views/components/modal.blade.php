@props(['name', 'show' => false, 'maxWidth' => 'lg'])

@php
    $maxWidthClass =
        [
            'sm' => 'modal-sm',
            'md' => 'modal-md',
            'lg' => 'modal-lg',
            'xl' => 'modal-xl',
            '2xl' => 'modal-xxl',
        ][$maxWidth] ?? 'modal-lg';
@endphp

<div class="modal fade" id="{{ $name }}" tabindex="-1" aria-labelledby="{{ $name }}Label"
    aria-hidden="true">
    <div class="modal-dialog {{ $maxWidthClass }}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $name }}Label">{{ $attributes->get('title') ?? '' }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            @if ($attributes->has('footer'))
                <div class="modal-footer">
                    {!! $attributes->get('footer') !!}
                </div>
            @endif
        </div>
    </div>
</div>
