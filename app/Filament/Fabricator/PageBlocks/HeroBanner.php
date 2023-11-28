<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class HeroBanner extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('heroBanner')
            ->schema([
                CuratorPicker::make('herobannerdesktop')
                    ->listDisplay(true)
                    ->outlined(false)
                    ->constrained(false)
                    ->size('md')
                    ->multiple(false),
                CuratorPicker::make('herobannermobile')
                    ->listDisplay(true)
                    ->outlined(false)
                    ->constrained(false)
                    ->size('md')
                    ->multiple(false),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}