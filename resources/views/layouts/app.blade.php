<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full" x-data="{ isSidebarOpen: false }">
<div>
    <!-- Mobile Top Bar -->
    <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-white px-4 py-4 shadow-xs sm:px-6 lg:hidden">
        <button type="button" class="-m-2.5 p-2.5 text-gray-700" @click="isSidebarOpen = true">
            <span class="sr-only">Open sidebar</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        <div class="flex-1 text-sm/6 font-semibold text-gray-900">Dashboard</div>
        <a href="{{ route('profile.edit') }}">
            <span class="sr-only">Your profile</span>
            <img class="size-8 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </a>
    </div>

    <!-- Sidebar Component -->
    <x-sidebar />

    <!-- Main Content -->
    <main class="py-10 lg:pl-72">
        <div class="px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>
</body>
</html>
