@props(['active'])

@php
    $classes = $active ? 'nav-link active' : 'nav-link';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }} {{ $active ? 'aria-current=page' : '' }}>
    {{ $slot }}
</a>
