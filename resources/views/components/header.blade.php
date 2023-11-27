<header 
    class="w-full bg-transparent fixed top-0 z-50 transition duration-500 ease-in-out" 
    :class="{ 'shadow-lg': atTop, 'bg-transparent':!atTop, 'bg-black':atTop}"
    @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">

    <div class="w-full max-w-7xl mx-auto p-5 bg-transparent flex flex-wrap relative"
    :class="{'py-3':atTop, 'py-5':!atTop}">
        <div class="header-logo flex flex-shrink justify-start w-40 md:w-56"
            :class="{'w-32 md:w-40':atTop, 'w-40 md:w-56':!atTop}"
            >

            <a href="{{ route('home') }}" class="w-full">
                <img src="/storage/{{ \App\Models\TextWidget::getImage('header-top') }}" alt="logo"/>
            </a>

        </div>
        <!-- Topic Nav -->
        
            <x-nav/>
    

        <div class="flex flex-shrink-0 md:flex-shrink flex-1 md:flex-none items-center justify-end text-lg text-white text-xl md:text-2xl text-right align-middle">
            {!! html_entity_decode(\App\Models\TextWidget::getContent('social-media')) !!}
        </div>
    </div>
</header>