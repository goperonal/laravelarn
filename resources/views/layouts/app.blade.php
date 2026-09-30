<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'ARN & Affiliates – Firma Hukum Samarinda' }}</title>
    <meta name="author" content="ARN & Affiliates">
    <meta name="description" content="{{ $metaDescription ?: 'ARN & Affiliates adalah firma hukum profesional di Samarinda, Kalimantan Timur. Melayani hukum pidana, perdata, bisnis, dan litigasi.' }}">

    {{-- Open Graph / WhatsApp --}}
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="ARN & Affiliates">
    <meta property="og:title" content="{{ $metaTitle ?: 'ARN & Affiliates – Firma Hukum Samarinda' }}">
    <meta property="og:description" content="{{ $metaDescription ?: 'ARN & Affiliates adalah firma hukum profesional di Samarinda, Kalimantan Timur.' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('og-image.png?v=2') }}">
    <meta property="og:image:secure_url" content="{{ asset('og-image.png?v=2') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="id_ID">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $metaTitle ?: 'ARN & Affiliates – Firma Hukum Samarinda' }}">
    <meta name="twitter:description" content="{{ $metaDescription ?: 'ARN & Affiliates adalah firma hukum profesional di Samarinda, Kalimantan Timur.' }}">
    <meta name="twitter:image" content="{{ asset('og-image.png?v=2') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/headersource/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/headersource/favicon-16x16.png">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        h1 {
            font-size: 32px;
        }
    </style>

    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
</head>
<body class="bg-white font-family-karla" x-data="{ atTop: false, openMenu: false }">
    <!-- Top Header -->
    <x-header/>
    
    <div class="w-full mb-8">

        {{ $slot }}

    </div>

   <x-footer/>


</body>
</html>