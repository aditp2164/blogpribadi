<?php

namespace App\Filament\Resources\MyProjekResource\Pages;

use App\Filament\Resources\MyProjekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMyProjeks extends ListRecords
{
    protected static string $resource = MyProjekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
