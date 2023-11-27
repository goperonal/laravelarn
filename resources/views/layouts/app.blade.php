<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'Arnaffiliates Blog' }}</title>
    <meta name="author" content="Arnaffiliates Blog">
    <meta name="description" content="{{ $metaDescription ?: '' }}">
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