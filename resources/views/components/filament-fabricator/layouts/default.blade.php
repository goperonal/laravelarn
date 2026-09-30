@props(['page'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page->title ?: 'ARN & Affiliates – Firma Hukum Samarinda' }}</title>
    <meta name="description" content="ARN & Affiliates adalah firma hukum profesional di Samarinda, Kalimantan Timur. Melayani hukum pidana, perdata, bisnis, dan litigasi.">
    <meta name="author" content="ARN & Affiliates">

    {{-- Open Graph / WhatsApp --}}
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ARN & Affiliates">
    <meta property="og:title" content="{{ $page->title ?: 'ARN & Affiliates – Firma Hukum Samarinda' }}">
    <meta property="og:description" content="ARN & Affiliates adalah firma hukum profesional di Samarinda, Kalimantan Timur. Melayani hukum pidana, perdata, bisnis, dan litigasi.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('og-image.png?v=2') }}">
    <meta property="og:image:secure_url" content="{{ asset('og-image.png?v=2') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $page->title ?: 'ARN & Affiliates – Firma Hukum Samarinda' }}">
    <meta name="twitter:description" content="ARN & Affiliates adalah firma hukum profesional di Samarinda, Kalimantan Timur.">
    <meta name="twitter:image" content="{{ asset('og-image.png?v=2') }}">
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