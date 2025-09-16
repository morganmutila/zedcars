@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert d-flex alert-success']) }} role="alert">
        <i class="fi-check-circle fs-lg pe-1 mt-1 me-2"></i>
        <div>{{ $status }}</div>
    </div>
@endif
