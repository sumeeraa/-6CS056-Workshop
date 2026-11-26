@props(['type' => 'success'])

@if ($slot->isNotEmpty())
    <div class="alert alert-{{ $type }}" role="alert">
        {{ $slot }}
    </div>
@endif
