<x-app-layout meta-description="Arnaffiliate Profile">
    <img src="storage/{{ \App\Models\TextWidget::getImage('home-hero') }}" alt="Hero Banner" class="w-full"/>
    <section class="w-full w-full max-w-7xl mx-auto py-0 px-5 text-center">
        <div class="w-full mt-5 flex">
            <div class="p-2 pl-0 flex-1">
                <div class="content w-full">
                    <img src="/storage/uploads/Cr7qEzHnHj3LAi4yUnrHmyFNLMPvDOs40UtUpk34.webp" alt="" width="480" height="480">
                    <h1>Andreas Hari Susanto Marbun, S.H.</h1>
                </div>
                
            </div>
            <div class="p-2 flex-1">
                <div class="content w-full">
                <img src="/storage/uploads/z5mQPdYDjEyYO3rr3KcT0f77EoiWEpoFKLSpDj0a.webp" alt="" width="480" height="480">
                <h1>Risnal, S.H.</h1>
                </div>
            </div>
            <div class="p-2 pr-0 flex-1">
                <div class="content w-full">
                <img src="/storage/uploads/fpBOd8fK8lq5lNNUUauLFbdNq3A2ASrRM1zpZ1AT.webp" alt="" width="480" height="480">
                <h1>Vinzensia Nella Banne Rara, S.H., M.H.</h1>
                </div>
            </div>
        </div>

        <a href="{{ route('our-team') }}" class="text-center p-3 px-6 text-white bg-black inline-block m-auto mt-10">See All Our Attorneys</a>
    </section> 
</x-app-layout>