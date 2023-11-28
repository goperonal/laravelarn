@aware([
    'page',
    'memberImage',
    'memberName',
    'memberImage2',
    'memberName2',
    'memberImage3',
    'memberName3',
])
<section class="w-full max-w-7xl mx-auto py-0 px-5 text-center mb-4">
    <div class="w-full mt-5 md:flex block">
        <div class="p-2 pl-0 flex-1 md:mb-0 mb-6">
            <x-curator-glider :media="$memberImage" curation="thumbnail" loading="lazy"/>
            <h1 class="px-8 mt-6 md:text-3xl text-xl">{{ $memberName }}</h1>
        </div>
        <div class="p-2 pl-0 flex-1 md:mb-0 mb-6">
            <x-curator-glider :media="$memberImage2" curation="thumbnail" loading="lazy"/>
            <h1 class="px-8 mt-6 md:text-3xl text-xl">{{ $memberName2 }}</h1>
        </div>
        <div class="p-2 pl-0 flex-1 md:mb-0 mb-6">
            <x-curator-glider :media="$memberImage3" curation="thumbnail" loading="lazy"/>
            <h1 class="px-8 mt-6 md:text-3xl text-xl">{{ $memberName3 }}</h1>
        </div>
    </div>
</section>