<x-admin-layout title="{{ __('Dashboard') }}" :breadcrumb="[
    // Route Dashboard
    [
        'name' => __('Dashboard'),
        'url' => route('admin.dashboard'),
    ],

    // Route Admin
    [
        'name' => __('Administrator'),
        'url' => '#',
    ],

    // Simple
    [
        'name' => __('Projects'),
    ],
]">
    <x-image-description />
    <x-image-description />
    <x-image-description />
    <x-image-description />
    <x-image-description />
    <x-image-description />
    <x-image-description />
    <x-image-description />
</x-admin-layout>
