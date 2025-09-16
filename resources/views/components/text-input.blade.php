<!-- Floating label: Reusable text input component -->
@props(['label' => '', 'type' => 'text', 'id' => '', 'placeholder' => '', 'disabled' => false, 'messages' => []])

@if ($type === 'password')
    @if (!empty($label))
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <div class="password-toggle">
        <input type="{{ $type }}" placeholder="{{ $placeholder }}" @disabled($disabled)
            {{ $attributes->merge(['class' => 'form-control form-control-lg ' . ($messages ? 'is-invalid' : '')]) }}>
        @if ($messages)
            <ul {{ $attributes->merge(['class' => 'list-unstyled gap-0 text-danger']) }}>
                @foreach ((array) $messages as $message)
                    <li><small>{{ $message }}</small></li>
                @endforeach
            </ul>
        @endif
        <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
            <input type="checkbox" class="btn-check">
        </label>
    </div>
@elseif($type === 'checkbox')
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" @disabled($disabled)
        {{ $attributes->merge(['class' => 'form-check-input ' . ($messages ? 'is-invalid' : '')]) }}
        id="{{ $id }}">
    <label for="{{ $id }}" class="form-check-label">{{ $slot }}</label>
@else
    @if (!empty($label))
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" @disabled($disabled)
        {{ $attributes->merge(['class' => 'form-control form-control-lg ' . ($messages ? 'is-invalid' : '')]) }}>

    @if ($messages)
        <ul {{ $attributes->merge(['class' => 'list-unstyled text-danger']) }}>
            @foreach ((array) $messages as $message)
                <li><small>{{ $message }}</small></li>
            @endforeach
        </ul>
    @endif

@endif
