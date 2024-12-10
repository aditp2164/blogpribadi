<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MyProjekResource\Pages;
use App\Filament\Resources\MyProjekResource\RelationManagers;
use App\Models\MyProjek;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class MyProjekResource extends Resource
{
    protected static ?string $model = MyProjek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form  
{  
    return $form  
        ->schema([  
            Forms\Components\TextInput::make('judul_projek')  
                ->required()  
                ->maxLength(255),  
            Forms\Components\Textarea::make('deskripsi')  
                ->required(),  
            Forms\Components\FileUpload::make('gambar')  
                ->directory('/images/myprojek') // Pastikan ini sesuai dengan struktur folder Anda  
                ->image()  
                ->maxSize(1024) // Maksimal ukuran 1MB  
                ->required(),  
        ]);  
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_projek')
                ->sortable()
                ->searchable(),
            Tables\Columns\TextColumn::make('deskripsi')
                ->limit(50),
            Tables\Columns\ImageColumn::make('gambar')
                ->disk('public') 
                ->label('Gambar')
                ->url(fn ($record) => Storage::url($record->gambar)), // Membuat path menjadi URL yang bisa diakses            
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
            'index' => Pages\ListMyProjeks::route('/'),
            'create' => Pages\CreateMyProjek::route('/create'),
            'edit' => Pages\EditMyProjek::route('/{record}/edit'),
        ];
    }
}
