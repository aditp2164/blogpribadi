<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutMeResource\Pages;
use App\Filament\Resources\AboutMeResource\RelationManagers;
use App\Models\AboutMe;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutMeResource extends Resource
{
    protected static ?string $model = AboutMe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required(),
                Forms\Components\DatePicker::make('ttl')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('no_telpon')->required(),
                Forms\Components\Textarea::make('alamat')->required(),
                Forms\Components\TextInput::make('pendidikan')->required(),
                Forms\Components\TextInput::make('minat')->required(),
                Forms\Components\TextInput::make('hobi')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                ->wrap()->sortable()->searchable(),
                Tables\Columns\TextColumn::make('ttl')->date()->wrap(),
                Tables\Columns\TextColumn::make('email')->wrap(),
                Tables\Columns\TextColumn::make('no_telpon')->wrap(),
                Tables\Columns\TextColumn::make('alamat')->limit(50)->wrap(),
                Tables\Columns\TextColumn::make('pendidikan')->wrap(),
                Tables\Columns\TextColumn::make('minat')->wrap(),
                Tables\Columns\TextColumn::make('hobi')->wrap(),
            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListAboutMes::route('/'),
            'create' => Pages\CreateAboutMe::route('/create'),
            'edit' => Pages\EditAboutMe::route('/{record}/edit'),
        ];
    }
}
