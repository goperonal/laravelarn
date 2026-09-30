<footer class="w-full bg-black text-gray-300 pt-12 pb-8 px-4 sm:px-6">
    <div class="w-full max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-8 text-center md:text-left">
        <!-- Brand & Address -->
        <div class="md:col-span-5 flex flex-col items-center md:items-start space-y-4">
            <a href="/#home" class="block w-48 md:w-56">
                <img src="/storage/{{ \App\Models\TextWidget::getImage('footer-1') }}" alt="ARN & Affiliates" class="w-full h-auto object-contain max-h-16"/>
            </a>
            <div class="text-sm text-gray-400 leading-relaxed max-w-md">
                {!! html_entity_decode(\App\Models\TextWidget::getContent('footer-1')) !!}
            </div>
        </div>

        <!-- Navigation Links -->
        <div class="md:col-span-3 flex flex-col items-center md:items-start">
            <h4 class="text-white font-bold text-base uppercase tracking-wider mb-4 border-b border-red-900 pb-1 inline-block">
                Menu Utama
            </h4>
            <div class="text-sm space-y-2 text-gray-400">
                {!! html_entity_decode(\App\Models\TextWidget::getContent('footer-2')) !!}
            </div>
        </div>

        <!-- Working Hours & Social Media -->
        <div class="md:col-span-4 flex flex-col items-center md:items-start space-y-4">
            <div>
                <h4 class="text-white font-bold text-base uppercase tracking-wider mb-4 border-b border-red-900 pb-1 inline-block">
                    Jam Operasional
                </h4>
                <div class="text-sm text-gray-400 space-y-1">
                    {!! html_entity_decode(\App\Models\TextWidget::getContent('working-hours')) !!}
                </div>
            </div>

            <div class="pt-2">
                <h5 class="text-xs uppercase tracking-widest text-gray-400 mb-2">Ikuti Kami</h5>
                <div class="flex items-center space-x-4 text-2xl text-white">
                    {!! html_entity_decode(\App\Models\TextWidget::getContent('social-media')) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="w-full max-w-7xl mx-auto mt-12 pt-6 border-t border-gray-900 text-center text-xs text-gray-400">
        <p>&copy; {{ date('Y') }} ARN & Affiliates Law Firm. All rights reserved.</p>
    </div>
</footer>
