<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} &#124; {{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6ba247df6c.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body x-data="{ open: false }" :class="{ 'overflow-hidden': open }" class="sm:overflow-auto">
    {{-- SIDEBAR ADMIN Component --}}
    @include('layouts.includes.admin.sidebar')

    {{-- NAVIGATION ADMIN Component --}}
    @include('layouts.includes.admin.navigation')

    <div class="p-4 sm:ml-64">
        <div class="mt-14">
            @include('layouts.includes.admin.breadcrumb')

            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>

    {{-- Mobile Background (Sidebar open) --}}
    <div x-cloak x-show="open" x-on:click="open = false"
        class="bg-stone-900 bg-opacity-50 fixed inset-0 z-30 transition-all sm:hidden"></div>

    @stack('modals')

    @livewireScripts
</body>

</html>
