<nav class="flex-grow-0 md:flex-grow flex items-center z-40 md:order-none order-3 justify-end">
    <button x-on:click="openMenu = ! openMenu" class="md:hidden text-white text-xl pl-10"><i class="fa-solid fa-bars"></i></button>
    <div :class="openMenu ? '' : 'hidden md:flex'" class="w-full justify-center container mx-auto"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90">

        <ul class="flex flex-col md:flex-row justify-center md:static absolute right-0 w-full md:bg-transparent bg-white  md:text-white text-black md:shadow-none shadow-xl" :class="atTop ? 'top-14' : 'top-20'">
            <li>
                <a href="{{ route('home') }}" class="md:rounded md:py-2 md:px-2 md:mx-2 w-full block px-3 py-2">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about-page') }}" class="md:rounded md:py-2 md:px-2 md:mx-2 w-full block py-2 px-3">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('our-team') }}" class="md:rounded md:py-2 md:px-2 md:mx-2 w-full block py-2 px-3">
                    Attoneys
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" class="md:rounded md:py-2 md:px-2 md:mx-2 w-full block py-2 px-3">
                    Practice Areas
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" class="md:rounded md:py-2 md:px-2 md:mx-2 w-full block py-2 px-3">
                    Legal Insights
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" class="md:rounded md:py-2 md:px-2 md:mx-2 w-full block py-2 px-3">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>