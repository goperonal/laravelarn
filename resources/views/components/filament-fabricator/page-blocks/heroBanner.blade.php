@aware([
    'page',
    'herobannerdesktop',
    'herobannermobile'
])
<div class="w-full relative overflow-hidden bg-black pt-16 md:pt-0">
    <div class="w-full">
        <x-curator-glider :media="$herobannerdesktop" loading="eager" class="w-full h-auto hidden md:block object-cover"/>
        <x-curator-glider :media="$herobannermobile" loading="eager" class="w-full h-auto block md:hidden object-cover"/>
    </div>
</div>
