<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Inter web font from bunny.net (GDPR compliant) -->
    <link rel="preconnect" href="https://fonts.bunny.net"/>
    <link
        href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <!-- Alpine x-cloak style (https://alpinejs.dev/directives/cloak) -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-main">

<!-- Sidebar -->
<div class="min-h-screen flex flex-col md:flex-row" x-data="{ sidebarOpen: false }">


   @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">

        @include('layouts.header')

        <!-- Main Content -->
        <main class="p-6">
            <div class="min-h-screen">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>
@livewireScripts
</body>
</html>
