@aware([
    'page',
    'herobannerdesktop',
    'herobannermobile'
])
<div class="w-full">
    <div class="w-full">
        <x-curator-glider :media="$herobannerdesktop" loading="lazy" class="w-full hidden md:block"/>
        <x-curator-glider :media="$herobannermobile" loading="lazy" class="w-full  block md:hidden"/>
    </div>
</div>
