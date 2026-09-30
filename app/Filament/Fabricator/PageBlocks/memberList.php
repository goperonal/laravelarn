<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class memberList extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('member-list')
        ->schema([
            Grid::make()
                ->schema([
                    CuratorPicker::make('memberImage')
                        ->listDisplay(true)
                        ->outlined(false)
                        ->constrained(false)
                        ->size('md')
                        ->multiple(false),
                    TextInput::make('memberName')
                        ->maxLength(2048)
                ]),
            Grid::make()
                ->schema([
                    CuratorPicker::make('memberImage2')
                        ->listDisplay(true)
                        ->outlined(false)
                        ->constrained(false)
                        ->size('md')
                        ->multiple(false),
                    TextInput::make('memberName2')
                        ->maxLength(2048)
                ]),
            Grid::make()
                ->schema([
                    CuratorPicker::make('memberImage3')
                        ->listDisplay(true)
                        ->outlined(false)
                        ->constrained(false)
                        ->size('md')
                        ->multiple(false),
                    TextInput::make('memberName3')
                        ->maxLength(2048)
            ])
        ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}