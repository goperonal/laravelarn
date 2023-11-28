@aware([
    'page',
    'image'
])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-7xl mx-auto">
        @foreach ($image as $imageitem)
            <x-curator-glider :media="$imageitem" curation="thumbnail" loading="lazy"/>
        @endforeach
        
    </div>
</div>
