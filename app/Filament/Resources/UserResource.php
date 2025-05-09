<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\{TextInput, DatePicker};
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $label = 'Users';
    protected static ?string $pluralLabel = 'Pengguna';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('name')
            ->label('Nama')
            ->required()
            ->maxLength(255),

        TextInput::make('email')
            ->label('Email')
            ->email()
            ->required()
            ->maxLength(255),

        TextInput::make('password')
            ->label('Password')
            ->password()
            ->required(fn ($context) => $context === 'create')
            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
            ->dehydrated(fn ($state) => filled($state)),

        DatePicker::make('date_of_birth')
            ->label('Tanggal Lahir')
            ->required(),
    ]);
}


public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('name')->label('Nama')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('email')->label('Email')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('date_of_birth')->label('Tanggal Lahir')->date(),
        ])
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}