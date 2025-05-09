<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\{TextInput, FileUpload, Textarea};
use Filament\Tables\Columns\{TextColumn, ImageColumn};
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $label = 'Galeri Perusahaan';
    protected static ?string $pluralLabel = 'Galeri';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('title')
            ->label('Judul Gambar')
            ->required()
            ->maxLength(255),

        FileUpload::make('image_url')
            ->label('Gambar')
            ->directory('uploads/galleries')
            ->image()
            ->required(),

        Textarea::make('description')
            ->label('Deskripsi')
            ->rows(4),
    ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('title')->label('Judul')->sortable()->searchable(),
            ImageColumn::make('image_url')->label('Gambar'),
            TextColumn::make('description')->label('Deskripsi')->limit(30),
        ])
        ->defaultSort('created_at', 'desc')
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}