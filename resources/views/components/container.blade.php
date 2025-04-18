@props(['width' => '7xl'])

@php
    $maxWidth = match ($width) {
        'sm' => 'max-w-sm',
        'md' => 'max-w-md',
        'lg' => 'max-w-lg',
        'xl' => 'max-w-xl',
        '2xl' => 'max-w-2xl',
        '3xl' => 'max-w-3xl',
        '4xl' => 'max-w-4xl',
        '5xl' => 'max-w-5xl',
        '6xl' => 'max-w-6xl',
        '7xl' => 'max-w-7xl',
        '8xl' => 'max-w-8xl',
        '9xl' => 'max-w-9xl',
        'none' => 'max-w-none',
        default => 'max-w-7xl'
    };
@endphp

<div
    {{ $attributes->merge(['class' => $maxWidth . ' ' . 'my-4 mx-auto lg:py-3 sm:py-5 px-4 sm:px-6 lg:px-8']) }}>
    {{ $slot }}
</div>
