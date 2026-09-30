<nav x-data="{ openMenu: false }" class="flex items-center">
    <!-- Hamburger Button (Mobile Only) -->
    <button x-on:click="openMenu = !openMenu" 
            class="md:hidden text-white text-2xl w-10 h-10 flex items-center justify-center rounded-lg bg-gray-800 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-400 transition" 
            aria-label="Toggle Navigation">
        <i class="fa-solid" :class="openMenu ? 'fa-xmark' : 'fa-bars'"></i>
    </button>

    <!-- Navigation Menu Container -->
    <div :class="openMenu ? 'block' : 'hidden md:flex'" 
         class="fixed md:static inset-x-0 top-14 sm:top-16 md:top-auto shadow-2xl md:shadow-none transition-all z-50"
         style="background-color: #0b0f19;"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2">

        <ul class="flex flex-col md:flex-row items-center justify-center p-4 md:p-0 divide-y divide-gray-800 md:divide-y-0 md:space-x-1 lg:space-x-3 text-xs sm:text-sm font-bold tracking-wider uppercase text-white">
            <li class="w-full md:w-auto text-center">
                <a href="/#home" 
                   @click="openMenu = false" 
                   class="block py-3 px-4 rounded-lg hover:text-yellow-400 hover:bg-gray-800 md:hover:bg-transparent transition">
                    Home
                </a>
            </li>
            <li class="w-full md:w-auto text-center">
                <a href="/#about" 
                   @click="openMenu = false" 
                   class="block py-3 px-4 rounded-lg hover:text-yellow-400 hover:bg-gray-800 md:hover:bg-transparent transition">
                    About
                </a>
            </li>
            <li class="w-full md:w-auto text-center">
                <a href="/#attorneys" 
                   @click="openMenu = false" 
                   class="block py-3 px-4 rounded-lg hover:text-yellow-400 hover:bg-gray-800 md:hover:bg-transparent transition">
                    Attorneys
                </a>
            </li>
            <li class="w-full md:w-auto text-center">
                <a href="/#practice-areas" 
                   @click="openMenu = false" 
                   class="block py-3 px-4 rounded-lg hover:text-yellow-400 hover:bg-gray-800 md:hover:bg-transparent transition">
                    Practice Areas
                </a>
            </li>
            <li class="w-full md:w-auto text-center">
                <a href="/#contact" 
                   @click="openMenu = false" 
                   class="block py-3 px-4 rounded-lg hover:text-yellow-400 hover:bg-gray-800 md:hover:bg-transparent transition">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
