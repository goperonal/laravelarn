<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class ImageBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('image')
            ->schema([
                CuratorPicker::make('image')
                    ->listDisplay(true)
                    ->outlined(false)
                    ->constrained(false)
                    ->size('md')
                    ->multiple(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}