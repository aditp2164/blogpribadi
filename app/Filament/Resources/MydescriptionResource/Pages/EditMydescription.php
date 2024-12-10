<?php

namespace App\Filament\Resources\MydescriptionResource\Pages;

use App\Filament\Resources\MydescriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMydescription extends EditRecord
{
    protected static string $resource = MydescriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
