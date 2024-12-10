<?php

namespace App\Filament\Resources\MydescriptionResource\Pages;

use App\Filament\Resources\MydescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMydescriptions extends ListRecords
{
    protected static string $resource = MydescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
