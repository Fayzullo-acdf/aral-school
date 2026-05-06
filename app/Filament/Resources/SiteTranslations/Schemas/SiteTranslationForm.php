<?php

namespace App\Filament\Resources\SiteTranslations\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;


class SiteTranslationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->trim()
                    ->required(),
                TextInput::make('category')
                    ->trim()
                    ->default(null),
                RichEditor::make('value')
                    ->required()
                    ->translatableTabs()
                    ->columnSpanFull(),
                Toggle::make('is_published')
                    ->label('Published')
                    ->required()
                    ->default(true),
            ]);
    }
}
