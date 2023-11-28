@props(['page'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title ?: 'Arnaffiliates Web' }}</title>
    <meta name="author" content="Arnaffiliates Web">
    {{-- <meta name="description" content="{{ $metaDescription ?: '' }}"> --}}
    <link rel="icon" href="/storage/headersource/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/headersource/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/headersource/favicon-16x16.png">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
    </style>
    @vite('resources/css/app.css')
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
</head>
<body class="bg-white font-family-karla" x-data="{ atTop: false, openMenu: false }">
    <!-- Top Header -->
    <x-global.header/>
    
    <div class="w-full text-center">
        <x-filament-fabricator::layouts.base :title="$page->title">
            {{-- Header Here --}}

            <div class="page-title w-full text-3xl font-bold text-white bg-black md:h-52 h-40 relative">
                <h1 class="page-title text-3xl font-bold text-white bg-black max-w-7xl mx-auto text-5xl px-5 text-left">
                    <span class="absolute bottom-5">{{ $page->title }}</span>
                </h1>
            </div>
            
            <x-filament-fabricator::page-blocks :blocks="$page->blocks" />

            {{-- Footer Here --}}
        </x-filament-fabricator::layouts.base>
    </div>

    <x-global.footer/>


</body>
</html>