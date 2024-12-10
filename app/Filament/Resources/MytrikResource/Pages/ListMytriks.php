<?php

namespace App\Filament\Resources\MytrikResource\Pages;

use App\Filament\Resources\MytrikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMytriks extends ListRecords
{
    protected static string $resource = MytrikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
