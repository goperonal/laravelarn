@aware([
    'page',
    'memberImage',
    'memberName',
    'memberImage2',
    'memberName2',
    'memberImage3',
    'memberName3',
])
<section class="w-full max-w-7xl mx-auto py-0 px-4 sm:px-6 text-center mb-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 mt-6">
        <!-- Partner 1 -->
        <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition p-4 border border-gray-100 flex flex-col items-center">
            <div class="w-full aspect-[3/4] max-w-xs overflow-hidden rounded-lg bg-gray-200">
                <x-curator-glider :media="$memberImage" curation="thumbnail" loading="lazy" class="w-full h-full object-cover object-top hover:scale-105 transition duration-500"/>
            </div>
            <h3 class="mt-4 font-bold text-lg md:text-xl text-gray-900 leading-snug px-2">{{ $memberName }}</h3>
            <span class="text-xs uppercase text-red-900 font-semibold tracking-wider mt-1">Managing Partner</span>
        </div>

        <!-- Partner 2 -->
        <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition p-4 border border-gray-100 flex flex-col items-center">
            <div class="w-full aspect-[3/4] max-w-xs overflow-hidden rounded-lg bg-gray-200">
                <x-curator-glider :media="$memberImage2" curation="thumbnail" loading="lazy" class="w-full h-full object-cover object-top hover:scale-105 transition duration-500"/>
            </div>
            <h3 class="mt-4 font-bold text-lg md:text-xl text-gray-900 leading-snug px-2">{{ $memberName2 }}</h3>
            <span class="text-xs uppercase text-red-900 font-semibold tracking-wider mt-1">Partner</span>
        </div>

        <!-- Partner 3 -->
        <div class="bg-gray-50 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition p-4 border border-gray-100 flex flex-col items-center">
            <div class="w-full aspect-[3/4] max-w-xs overflow-hidden rounded-lg bg-gray-200">
                <x-curator-glider :media="$memberImage3" curation="thumbnail" loading="lazy" class="w-full h-full object-cover object-top hover:scale-105 transition duration-500"/>
            </div>
            <h3 class="mt-4 font-bold text-lg md:text-xl text-gray-900 leading-snug px-2">{{ $memberName3 }}</h3>
            <span class="text-xs uppercase text-red-900 font-semibold tracking-wider mt-1">Partner</span>
        </div>
    </div>
</section>
