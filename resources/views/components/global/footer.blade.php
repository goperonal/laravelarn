<footer class="w-full bg-black text-gray-300 px-5">
    <div class="inline-footer md:grid md:grid-cols-12 md:gap-4 w-full max-w-7xl mx-auto py-5 text-center md:text-left">
        <div class="md:col-span-5 pb-4">
            <a href="/" class="w-64 block mb-4 md:m-0 md:mb-4 m-auto">
                <img src="/storage/{{ \App\Models\TextWidget::getImage('footer-1') }}" alt=""/>
            </a>
            {!! html_entity_decode(\App\Models\TextWidget::getContent('footer-1')) !!}
        </div>
        <div class="md:col-span-2 pb-4">
            <h2 class="text-bold text-3xl mb-2 mt-3 uppercase">{{ \App\Models\TextWidget::getTitle('footer-2') }}</h2>
            {!! html_entity_decode(\App\Models\TextWidget::getContent('footer-2')) !!}
        </div>
        <div class="md:col-span-3 pb-4">
            <h2 class="text-bold text-3xl mb-2 mt-3 uppercase">{{ \App\Models\TextWidget::getTitle('working-hours') }}</h2>
            {!! html_entity_decode(\App\Models\TextWidget::getContent('working-hours')) !!}
        </div>
        <div class="md:col-span-2 items-center text-lg no-underline text-3xl pb-4 mt-3">
            {!! html_entity_decode(\App\Models\TextWidget::getContent('social-media')) !!}
        </div>
    </div>
</footer>