<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TitleBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('title')
            ->schema([
                TextInput::make('memberName')
                    ->maxLength(2048),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}