@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'list-unstyled text-danger fs-6']) }}>
        @foreach ((array) $messages as $message)
            <li><small>{{ $message }}</small></li>
        @endforeach
    </ul>
@endif
