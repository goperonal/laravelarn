<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ButtonBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('button')
            ->schema([
                TextInput::make('buttonText')
                            ->maxLength(2048),
                TextInput::make('buttonUrl')
                            ->maxLength(2048),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}