<?php

namespace App\Filament\Resources\MyProjekResource\Pages;

use App\Filament\Resources\MyProjekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyProjek extends EditRecord
{
    protected static string $resource = MyProjekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
