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

<body>
    {{-- SIDEBAR ADMIN Component --}}
    @include('layouts.includes.admin.sidebar')

    {{-- NAVIGATION ADMIN Component --}}
    @include('layouts.includes.admin.navigation')

    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg mt-14">
            {{ $slot }}
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
