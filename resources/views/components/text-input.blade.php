<!-- Floating label: Reusable text input component -->
@props(['type' => 'text', 'placeholder' => '', 'disabled' => false, 'messages' => []])

@if ($type === 'password')
    <div class="password-toggle">
        <input type="{{ $type }}" placeholder="{{ $placeholder }}" @disabled($disabled)
            {{ $attributes->merge(['class' => 'form-control form-control-lg ' . ($messages ? 'is-invalid' : '')]) }}>
        @if ($messages)
            <ul {{ $attributes->merge(['class' => 'list-unstyled text-danger']) }}>
                @foreach ((array) $messages as $message)
                    <li><small>{{ $message }}</small></li>
                @endforeach
            </ul>
        @endif
        <label class="password-toggle-button fs-lg" aria-label="Show/hide password">
            <input type="checkbox" class="btn-check">
        </label>
    </div>
@else
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
