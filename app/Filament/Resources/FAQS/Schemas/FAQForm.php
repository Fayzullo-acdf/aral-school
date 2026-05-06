<?php

namespace App\Filament\Resources\FAQS\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use App\Models\FAQ;

class FAQForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                Textarea::make('question')
                    ->trim()
                    ->label('Question')
                    ->required()
                    ->translatableTabs()
                    ->columnSpanFull(),
                Textarea::make('answer')
                    ->trim()
                    ->label('Answer')
                    ->required()
                    ->translatableTabs()
                    ->columnSpanFull(),
                Select::make('position')
                    ->label('Position in column')
                    ->options(['right' => 'Right', 'left' => 'Left'])
                    ->default('left'),
                TextInput::make('order')
                    ->trim()
                    ->label('Order')
                    ->numeric()
                    ->default(fn() => FAQ::count() + 1),
            ]);
    }
}
