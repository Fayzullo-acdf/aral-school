<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use App\Models\Menu;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->trim()
                    ->required()
                    ->translatableTabs()
                    ->columnSpanFull(),
                TextInput::make('url')
                    ->trim()
                    ->placeholder('Enter url'),
                TextInput::make('order')
                    ->trim()
                    ->numeric()
                    ->default(fn() => Menu::count() + 1)
                    ->label('Order of menu listitem'),
                Toggle::make('visibility')
                    ->label('Visible')
                    ->default(true),
            ]);
    }
}
