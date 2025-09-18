@props([
    'label' => '',
    'type' => 'text',
    'id' => '',
    'placeholder' => '',
    'disabled' => false,
    'messages' => [],
    'withIcon' => false,
    'icon' => '',
])

@php
    $inputClass = 'form-control form-control-lg';
    if ($messages) {
        $inputClass .= ' is-invalid';
    }
    if ($withIcon) {
        $inputClass .= ' form-icon-start';
    }
    $inputAttrs = $attributes->merge(['class' => $inputClass, 'id' => $id]);
@endphp

@if ($type === 'password')
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <div class="password-toggle position-relative">
        @if ($withIcon && $icon)
            <i class="{{ $icon }} position-absolute top-50 start-0 translate-middle-y fs-lg ms-3"></i>
        @endif
        <input type="password" placeholder="{{ $placeholder }}" @disabled($disabled) {{ $inputAttrs }}>
        
        <label wire:ignore class="password-toggle-button fs-lg" aria-label="Show/hide password">
            <input type="checkbox" class="btn-check">
        </label>
    </div>
    @if ($messages)
        <ul class="list-unstyled gap-0 text-danger">
            @foreach ((array) $messages as $message)
                <li><small>{{ $message }}</small></li>
            @endforeach
        </ul>
    @endif
@elseif($type === 'checkbox')
    <div class="position-relative form-check">
        <input type="checkbox" @disabled($disabled)
            {{ $attributes->merge(['class' => 'form-check-input' . ($messages ? ' is-invalid' : ''), 'id' => $id]) }}>
        <label for="{{ $id }}" class="form-check-label">{{ $slot ?: $label }}</label>
    </div>
     @if ($messages)
        <ul class="list-unstyled text-danger">
            @foreach ((array) $messages as $message)
                <li><small>{{ $message }}</small></li>
            @endforeach
        </ul>
    @endif
@else
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <div class="position-relative">
        @if ($withIcon && $icon)
            <i class="{{ $icon }} position-absolute top-50 start-0 translate-middle-y fs-lg ms-3"></i>
        @endif
        <input type="{{ $type }}" placeholder="{{ $placeholder }}" @disabled($disabled)
            {{ $inputAttrs }}>
    </div>
    @if ($messages)
        <ul class="list-unstyled text-danger">
            @foreach ((array) $messages as $message)
                <li><small>{{ $message }}</small></li>
            @endforeach
        </ul>
    @endif
@endif
