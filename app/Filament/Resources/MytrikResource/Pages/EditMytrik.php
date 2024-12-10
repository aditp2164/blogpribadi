<?php

namespace App\Filament\Resources\MytrikResource\Pages;

use App\Filament\Resources\MytrikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMytrik extends EditRecord
{
    protected static string $resource = MytrikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
