<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\{TextInput, Textarea, FileUpload, Select};
use Filament\Tables\Columns\{TextColumn, ImageColumn};

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $label = 'Produk';
    protected static ?string $pluralLabel = 'Produk';

    public static function form(Form $form): Form
{
    return $form->schema([
        Select::make('category_id')
            ->label('Kategori')
            ->relationship('category', 'name') // relasi ke model Category
            ->required(),

        TextInput::make('name')
            ->label('Nama Produk')
            ->required()
            ->maxLength(255),

        Textarea::make('description')
            ->label('Deskripsi')
            ->rows(5),

        FileUpload::make('image_url')
            ->label('Gambar')
            ->image()
            ->directory('produk')
            ->imagePreviewHeight('200')
            ->required(),
    ]);
}

public static function table(Table $table): Table
{
    return $table->columns([
        ImageColumn::make('image_url')
            ->label('Gambar')
            ->circular(),

        TextColumn::make('name')
            ->label('Nama')
            ->searchable()
            ->sortable(),

        TextColumn::make('category.name')
            ->label('Kategori')
            ->sortable()
            ->searchable(),
    ])
    ->defaultSort('name');
}


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}