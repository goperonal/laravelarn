<header 
    x-data="{ isScrolled: false, mobileOpen: false }"
    class="w-full fixed top-0 left-0 right-0 z-50 transition-all duration-300"
    :class="isScrolled ? 'shadow-xl' : 'shadow-none'"
    :style="isScrolled || mobileOpen 
        ? 'background-color: rgba(11, 15, 25, 0.98); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);' 
        : 'background: linear-gradient(to bottom, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.3) 70%, rgba(0,0,0,0) 100%); backdrop-filter: none; -webkit-backdrop-filter: none;'"
    @scroll.window="isScrolled = (window.pageYOffset > 50)">

    <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 py-3 flex items-center justify-between">

        <!-- 1. Logo Brand (Kiri) -->
        <div class="flex-shrink-0">
            <a href="/#home" class="block">
                <img src="/storage/{{ \App\Models\TextWidget::getImage('header-top') }}" 
                     alt="ARN & Affiliates" 
                     class="h-10 sm:h-12 md:h-14 w-auto object-contain filter drop-shadow(0 2px 4px rgba(0,0,0,0.6))"/>
            </a>
        </div>

        <!-- 2. Desktop Navigation: Links di Tengah-Kanan, Sosmed di PALING KANAN -->
        <div class="hidden md:flex items-center space-x-6 lg:space-x-8">
            <!-- Nav Links -->
            <ul class="flex items-center space-x-4 lg:space-x-6 text-xs lg:text-sm font-bold tracking-wider uppercase text-white">
                <li>
                    <a href="/#home" class="py-2 hover:text-yellow-400 transition-colors drop-shadow">Home</a>
                </li>
                <li>
                    <a href="/#about" class="py-2 hover:text-yellow-400 transition-colors drop-shadow">About</a>
                </li>
                <li>
                    <a href="/#attorneys" class="py-2 hover:text-yellow-400 transition-colors drop-shadow">Attorneys</a>
                </li>
                <li>
                    <a href="/#practice-areas" class="py-2 hover:text-yellow-400 transition-colors drop-shadow">Practice Areas</a>
                </li>
                <li>
                    <a href="/#contact" class="py-2 hover:text-yellow-400 transition-colors drop-shadow">Contact</a>
                </li>
            </ul>

            <!-- Pemisah Garis Halus -->
            <div class="h-5 w-px bg-white/30"></div>

            <!-- Sosmed Icons di Paling Kanan -->
            <div class="flex items-center space-x-2">
                <a href="https://api.whatsapp.com/send?phone=+6282210850723" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   title="WhatsApp"
                   class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/25 text-white flex items-center justify-center transition border border-white/20 hover:text-yellow-400 shadow">
                    <i class="fa-brands fa-whatsapp text-lg"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100094502619698&mibextid=LQQJ4d" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   title="Facebook"
                   class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/25 text-white flex items-center justify-center transition border border-white/20 hover:text-yellow-400 shadow">
                    <i class="fa-brands fa-facebook-f text-sm"></i>
                </a>
                <a href="https://www.instagram.com/arnaffiliates/" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   title="Instagram"
                   class="w-9 h-9 rounded-full bg-white/10 hover:bg-white/25 text-white flex items-center justify-center transition border border-white/20 hover:text-yellow-400 shadow">
                    <i class="fa-brands fa-instagram text-base"></i>
                </a>
            </div>
        </div>

        <!-- 3. Mobile Header: Sosmed + Tombol Hamburger -->
        <div class="flex md:hidden items-center space-x-2">
            <!-- Sosmed Mobile -->
            <div class="flex items-center space-x-1.5">
                <a href="https://api.whatsapp.com/send?phone=+6282210850723" 
                   target="_blank" rel="noopener noreferrer" title="WhatsApp"
                   class="w-8 h-8 rounded-full bg-white/15 text-white flex items-center justify-center border border-white/20">
                    <i class="fa-brands fa-whatsapp text-sm"></i>
                </a>
                <a href="https://www.facebook.com/profile.php?id=100094502619698&mibextid=LQQJ4d" 
                   target="_blank" rel="noopener noreferrer" title="Facebook"
                   class="w-8 h-8 rounded-full bg-white/15 text-white flex items-center justify-center border border-white/20">
                    <i class="fa-brands fa-facebook-f text-xs"></i>
                </a>
                <a href="https://www.instagram.com/arnaffiliates/" 
                   target="_blank" rel="noopener noreferrer" title="Instagram"
                   class="w-8 h-8 rounded-full bg-white/15 text-white flex items-center justify-center border border-white/20">
                    <i class="fa-brands fa-instagram text-xs"></i>
                </a>
            </div>

            <!-- Hamburger Button -->
            <button @click="mobileOpen = !mobileOpen" 
                    class="text-white text-xl w-9 h-9 flex items-center justify-center rounded-lg bg-white/10 hover:bg-white/20 border border-white/20 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition" 
                    aria-label="Toggle Navigation">
                <i class="fa-solid" :class="mobileOpen ? 'fa-xmark' : 'fa-bars'"></i>
            </button>
        </div>

    </div>

    <!-- 4. Mobile Drawer Dropdown Menu -->
    <div x-show="mobileOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="md:hidden border-t border-gray-800"
         style="background-color: #0b0f19;">
        <ul class="flex flex-col p-4 divide-y divide-gray-800 text-sm font-bold tracking-wider uppercase text-white">
            <li>
                <a href="/#home" @click="mobileOpen = false" class="block py-3 px-3 hover:text-yellow-400 rounded transition">Home</a>
            </li>
            <li>
                <a href="/#about" @click="mobileOpen = false" class="block py-3 px-3 hover:text-yellow-400 rounded transition">About</a>
            </li>
            <li>
                <a href="/#attorneys" @click="mobileOpen = false" class="block py-3 px-3 hover:text-yellow-400 rounded transition">Attorneys</a>
            </li>
            <li>
                <a href="/#practice-areas" @click="mobileOpen = false" class="block py-3 px-3 hover:text-yellow-400 rounded transition">Practice Areas</a>
            </li>
            <li>
                <a href="/#contact" @click="mobileOpen = false" class="block py-3 px-3 hover:text-yellow-400 rounded transition">Contact</a>
            </li>
        </ul>
    </div>
</header>
