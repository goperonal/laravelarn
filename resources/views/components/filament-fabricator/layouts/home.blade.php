@props(['page'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
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
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif; }
    </style>
    @vite('resources/css/app.css')
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
</head>
<body class="bg-white text-gray-800 antialiased selection:bg-red-900 selection:text-white" x-data="{ atTop: false, openMenu: false }">

    <!-- Top Header -->
    <x-global.header />

    <!-- SECTION: HOME / HERO -->
    <section id="home" class="w-full relative scroll-mt-20">
        <x-filament-fabricator::page-blocks :blocks="array_filter($page->blocks, fn($b) => $b['type'] === 'heroBanner')" />
    </section>

    <!-- SECTION: ABOUT US (Preview with link to /about-us) -->
    <section id="about" class="w-full py-12 md:py-20 bg-gradient-to-b from-gray-50 to-white border-b border-gray-200 scroll-mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <!-- Header Section -->
            <div class="text-center max-w-2xl mx-auto mb-8 md:mb-14">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-900 text-xs font-bold uppercase tracking-widest rounded-full mb-3">
                    Profil Firma
                </span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
                    Tentang ARN & Affiliates
                </h2>
                <div class="w-16 h-1 bg-red-900 mx-auto mt-3 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                <!-- Kolom Kiri: Narasi -->
                <div class="lg:col-span-7 space-y-4">
                    <div class="border-l-4 border-red-900 pl-4 py-1">
                        <p class="text-base sm:text-lg font-bold text-gray-900 leading-snug">
                            Firma hukum profesional yang berkedudukan di Kota Samarinda, Kalimantan Timur.
                        </p>
                    </div>

                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed text-left">
                        Didirikan pada tahun 2020 oleh advokat-advokat muda berdedikasi tinggi, ARN & Affiliates hadir menyediakan layanan advis dan konsultasi hukum komprehensif di berbagai bidang—baik penanganan perkara litigasi di pengadilan maupun konsultasi non-litigasi bagi korporasi dan perseorangan.
                    </p>

                    <p class="text-sm sm:text-base text-gray-700 leading-relaxed text-left">
                        Setiap perkara kami tangani dengan pendekatan berbasis hati nurani tanpa pernah mengorbankan integritas serta standar profesionalisme hukum tertinggi.
                    </p>

                    <div class="pt-2 sm:pt-4">
                        <a href="/about-us" class="inline-flex items-center justify-center w-full sm:w-auto px-6 py-3.5 bg-red-900 hover:bg-black text-white text-sm sm:text-base font-semibold rounded-xl shadow-md hover:shadow-lg transition duration-200 group">
                            <span>Baca Selengkapnya Profil Firma</span>
                            <i class="fa-solid fa-arrow-right ml-2 text-xs group-hover:translate-x-1 transition duration-200"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom Kanan: Card Visi & Misi -->
                <div class="lg:col-span-5 space-y-4">
                    <!-- Card Visi -->
                    <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-200/80 hover:border-red-200 transition">
                        <div class="flex items-center space-x-3 mb-2.5">
                            <div class="w-9 h-9 rounded-xl bg-red-50 text-red-900 flex items-center justify-center font-bold text-base flex-shrink-0">
                                <i class="fa-solid fa-compass"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Visi Kami</h3>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-left">
                            Membangun komitmen pelayanan jasa hukum terbaik kepada Klien berdasarkan peraturan perundang-undangan yang berlaku, dengan tetap menjunjung tinggi nilai-nilai keadilan masyarakat.
                        </p>
                    </div>

                    <!-- Card Misi -->
                    <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-200/80 hover:border-red-200 transition">
                        <div class="flex items-center space-x-3 mb-2.5">
                            <div class="w-9 h-9 rounded-xl bg-red-50 text-red-900 flex items-center justify-center font-bold text-base flex-shrink-0">
                                <i class="fa-solid fa-scale-balanced"></i>
                            </div>
                            <h3 class="text-lg font-bold text-gray-900">Misi Kami</h3>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed text-left">
                            Memberikan konsultasi, pendampingan, dan pembelaan hak hukum Klien dengan perilaku jujur, profesional, bertanggung jawab, dan berintegritas tinggi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: OUR ATTORNEYS -->
    <section id="attorneys" class="w-full py-12 md:py-20 bg-white scroll-mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
            <span class="inline-block px-3 py-1 bg-red-100 text-red-900 text-xs font-bold uppercase tracking-widest rounded-full mb-3">
                Tim Advokat
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
                Managing Partners & Lawyers
            </h2>
            <div class="w-16 h-1 bg-red-900 mx-auto mt-3 mb-8 md:mb-12 rounded-full"></div>

            <x-filament-fabricator::page-blocks :blocks="array_filter($page->blocks, fn($b) => $b['type'] === 'member-list')" />

            <div class="mt-8">
                <a href="/attoneys" class="inline-flex items-center justify-center w-full sm:w-auto px-6 py-3.5 bg-black hover:bg-red-900 text-white text-sm sm:text-base font-semibold rounded-xl transition shadow">
                    <span>Lihat Seluruh Tim Advokat</span>
                    <i class="fa-solid fa-users ml-2 text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION: PRACTICE AREAS -->
    <section id="practice-areas" class="w-full py-12 md:py-20 bg-gray-50 border-t border-b border-gray-200 scroll-mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="text-center max-w-2xl mx-auto mb-8 md:mb-14">
                <span class="inline-block px-3 py-1 bg-red-100 text-red-900 text-xs font-bold uppercase tracking-widest rounded-full mb-3">
                    Layanan Hukum
                </span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight leading-tight">
                    Bidang Praktik
                </h2>
                <div class="w-16 h-1 bg-red-900 mx-auto mt-3 mb-3 rounded-full"></div>
                <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">
                    Layanan hukum komprehensif bagi individu, korporasi, serta institusi di Kalimantan Timur dan seluruh Indonesia.
                </p>
            </div>

            <!-- Grid Kartu Bidang Praktik -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                <!-- 1. Bisnis -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Hukum Bisnis & Korporasi</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Merger, akuisisi, restrukturisasi, sindikasi kredit, kepailitan & PKPU.</p>
                    </div>
                </div>

                <!-- 2. Perdata -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-scale-balanced"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Hukum Perdata</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Hukum perjanjian/kontrak, sengketa pertanahan, hukum keluarga & waris.</p>
                    </div>
                </div>

                <!-- 3. Pidana -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-gavel"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Hukum Pidana</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Pendampingan pidana umum dan pidana khusus (Tipikor, Money Laundering).</p>
                    </div>
                </div>

                <!-- 4. Lingkungan -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-tree"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Hukum Lingkungan</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Sengketa lingkungan hidup, kepatuhan AMDAL, dan ganti rugi pencemaran.</p>
                    </div>
                </div>

                <!-- 5. Ketenagakerjaan -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-user-tie"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Ketenagakerjaan</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Penyelesaian PHK, penyusunan PKB/PP, serta advokasi hak-hak pekerja.</p>
                    </div>
                </div>

                <!-- 6. Pajak -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Hukum Pajak</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Konsultasi kepatuhan pajak korporasi dan litigasi sengketa di Pengadilan Pajak.</p>
                    </div>
                </div>

                <!-- 7. HAKI -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-copyright"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Kekayaan Intelektual</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Pendaftaran dan penegakan sengketa Hak Cipta, Merek, Paten & Rahasia Dagang.</p>
                    </div>
                </div>

                <!-- 8. TUN -->
                <div class="bg-white p-5 sm:p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-red-200 transition text-left flex flex-col justify-between">
                    <div>
                        <div class="w-11 h-11 bg-red-50 text-red-900 rounded-xl flex items-center justify-center text-lg mb-3 flex-shrink-0">
                            <i class="fa-solid fa-building-columns"></i>
                        </div>
                        <h3 class="font-bold text-base sm:text-lg text-gray-900 mb-2 leading-snug">Tata Usaha Negara</h3>
                        <p class="text-xs sm:text-sm text-gray-600 leading-relaxed">Gugatan keputusan pejabat TUN, masalah perizinan usaha & sengketa kepegawaian.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION: CONTACT US --}}
    <section id="contact" class="w-full py-12 md:py-20 bg-white scroll-mt-16 border-t border-gray-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="bg-gradient-to-br from-gray-900 via-black to-red-950 rounded-3xl p-6 sm:p-10 md:p-12 text-white shadow-2xl text-center relative overflow-hidden">
                <!-- Ambient Glow -->
                <div class="absolute -top-12 -right-12 w-48 h-48 bg-red-800 opacity-20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 space-y-6">
                    <div>
                        <span class="inline-block px-3 py-1 bg-yellow-500/20 text-yellow-300 text-xs font-bold uppercase tracking-widest rounded-full mb-3">
                            Konsultasi Hukum
                        </span>
                        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-white tracking-tight leading-tight">
                            Hubungi Kami Langsung
                        </h2>
                    </div>

                    <p class="text-xs sm:text-sm md:text-base text-gray-300 max-w-xl mx-auto leading-relaxed">
                        Diskusikan kebutuhan dan penanganan perkara Anda dengan tim Advokat kami. Respon cepat, aman, dan rahasia terjamin.
                    </p>

                    <!-- Tombol Action -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-3 pt-2">
                        <a href="https://api.whatsapp.com/send?phone=+6282210850723" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           class="inline-flex items-center justify-center px-6 py-3.5 bg-green-500 hover:bg-green-600 text-white font-bold rounded-xl shadow-lg hover:shadow-green-500/30 transition text-sm sm:text-base">
                            <i class="fa-brands fa-whatsapp text-xl mr-2.5"></i>
                            <span>Chat WhatsApp (+62 822-1085-0723)</span>
                        </a>

                        <a href="mailto:arn.affiliates@gmail.com" 
                           class="inline-flex items-center justify-center px-5 py-3.5 bg-white/10 hover:bg-white/20 text-white font-semibold rounded-xl border border-white/20 transition text-sm sm:text-base">
                            <i class="fa-regular fa-envelope mr-2"></i>
                            <span>Kirim Email</span>
                        </a>
                    </div>

                    <!-- Detail Alamat & Jam Kerja -->
                    <div class="pt-6 border-t border-white/10 grid grid-cols-1 md:grid-cols-2 gap-3 text-xs sm:text-sm text-gray-300">
                        <div class="flex items-center justify-center md:justify-start space-x-2 text-center md:text-left">
                            <i class="fa-solid fa-location-dot text-red-400 flex-shrink-0"></i>
                            <span>Jln. Slamet Riyadi No. 76, Samarinda, Kaltim</span>
                        </div>
                        <div class="flex items-center justify-center md:justify-end space-x-2 text-center md:text-right">
                            <i class="fa-regular fa-clock text-yellow-400 flex-shrink-0"></i>
                            <span>Senin – Sabtu: 08.00 – 16.00 WITA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: FOOTER -->
    <x-global.footer />

    <!-- Back to Top Floating Button (Best Practice: muncul setelah scroll 400px / melewati hero) -->
    <div x-data="{ showTopBtn: false }"
         @scroll.window="showTopBtn = (window.pageYOffset > 400)"
         class="fixed bottom-6 right-6 z-40">
        <button x-show="showTopBtn"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 scale-75"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 scale-75"
                @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
                class="w-12 h-12 rounded-full bg-red-900 hover:bg-black text-white shadow-xl hover:shadow-2xl flex items-center justify-center transition-all duration-300 border-2 border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400 group"
                aria-label="Kembali ke atas">
            <i class="fa-solid fa-arrow-up text-lg group-hover:-translate-y-1 transition-transform duration-200"></i>
        </button>
    </div>

</body>
</html>
