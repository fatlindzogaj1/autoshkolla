@props([
    'status',
])

@if ($status)
    <div {{ $attributes->merge(['class' => 'border-2 border-black bg-(--color-bauhaus-yellow) px-3 py-2 text-sm font-bold']) }}>
        {{ $status }}
    </div>
@endif
