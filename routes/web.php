<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use Z3d0X\FilamentFabricator\Models\Page;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/about-page', [SiteController::class, 'about'])->name('about-page');
// Route::get('/our-team', [SiteController::class, 'ourTeam'])->name('our-team');
// Route::get('/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');
// Route::get('/{post:slug}', [PostController::class, 'show'])->name('view'); 

if (config('filament-fabricator.routing.enabled')) {
    Route::middleware(SubstituteBindings::class)
        ->prefix(config('filament-fabricator.routing.prefix', null))
        ->group(function () {
            Route::get('/{filamentFabricatorPage?}', function (?Page $filamentFabricatorPage = null) {
                // Handle root (home) page
                
                if (blank($filamentFabricatorPage)) {
                    $pageUrls = FilamentFabricator::getPageUrls();
                    $pageId = array_search('/', $pageUrls);

                    $filamentFabricatorPage = FilamentFabricator::getPageModel()::query()
                        ->where('id', $pageId)
                        ->firstOrFail();
                }
                $component = FilamentFabricator::getLayoutFromName($filamentFabricatorPage?->layout)::getComponent();

                return Blade::render(
                    <<<'BLADE'
                    <x-dynamic-component
                        :component="$component"
                        :page="$page"
                    />
                    BLADE,
                    ['component' => $component, 'page' => $filamentFabricatorPage]
                );
            })
            ->where('filamentFabricatorPage', '.*');
        });
}