<x-app-layout meta-title="Arnaffiliate - About us page" meta-description="About us">
    <div class="page-title w-full text-3xl font-bold text-white bg-black md:h-52 h-40 relative">
        <h1 class="page-title text-3xl font-bold text-white bg-black max-w-7xl mx-auto text-5xl px-5">
            <span class="absolute bottom-5">{{$widget->title}}</span>
        </h1>
    </div>
    
    <!-- Post Section -->
    <section class="w-full max-w-7xl mx-auto">

        <article class="flex flex-col shadow my-4">
            <div class="bg-white flex flex-col justify-start p-6">
                
                <p class="pb-3"> 
                    {!! $widget->content !!}
                </p>
            </div>
        </article>

    </section>
</x-app-layout>