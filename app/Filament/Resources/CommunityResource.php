<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommunityResource\Pages;
use App\Filament\Resources\CommunityResource\RelationManagers;
use App\Models\Community;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\{TextColumn, ImageColumn};
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\{TextInput, Textarea, FileUpload};

class CommunityResource extends Resource
{
    protected static ?string $model = Community::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    protected static ?string $label = 'Komunitas';
    protected static ?string $pluralLabel = 'Komunitas';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->label('Nama Komunitas'),
        
            Textarea::make('description')
                ->label('Deskripsi')
                ->rows(5),
        
            FileUpload::make('image_url')
                ->label('Gambar')->image()
                ->directory('komunitas')
                ->imagePreviewHeight('200'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            ImageColumn::make('image_url')
                ->label('Gambar')
                ->circular(),
                
            TextColumn::make('title')
                ->label('Judul')
                ->searchable(),
                
            TextColumn::make('description')
                ->limit(50)
                ->label('Deskripsi'),
    ]);
}

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCommunities::route('/'),
            'create' => Pages\CreateCommunity::route('/create'),
            'edit' => Pages\EditCommunity::route('/{record}/edit'),
        ];
    }
}