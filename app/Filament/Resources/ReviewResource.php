<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewResource\Pages;
use App\Models\Review;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\Colors\Color;
use Filament\Forms\Components\{TextInput, Textarea, Select};
use Filament\Tables\Columns\{TextColumn, BadgeColumn};

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-right';
    protected static ?string $label = 'Ulasan Pelanggan';
    protected static ?string $pluralLabel = 'Ulasan';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Nama Pelanggan')
                ->required()
                ->maxLength(100),

            Select::make('rating')
                ->label('Rating')
                ->options([
                    1 => '1 - Sangat Buruk',
                    2 => '2 - Buruk',
                    3 => '3 - Cukup',
                    4 => '4 - Baik',
                    5 => '5 - Sangat Baik',
                ])
                ->required(),

            Textarea::make('comment')
                ->label('Komentar')
                ->rows(5)
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')
                ->label('Nama')
                ->sortable(),
    
            BadgeColumn::make('rating')
                ->label('Rating')
                ->formatStateUsing(function ($state) {
                    return match ($state) {
                        1 => '1 - Sangat Buruk',
                        2 => '2 - Buruk',
                        3 => '3 - Cukup',
                        4 => '4 - Baik',
                        5 => '5 - Sangat Baik',
                        default => 'Tidak Diketahui',
                    };
                })
                ->color(function ($state) {
                    return match ($state) {
                        1 => 'danger',
                        2 => 'warning',
                        3 => 'primary',
                        4, 5 => 'success',
                        default => 'gray',
                    };
                })
                ->sortable(),
    
            TextColumn::make('comment')
                ->label('Komentar')
                ->limit(100)
                ->searchable(),
        ])
        ->defaultSort('rating', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }
}