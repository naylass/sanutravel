<?php

namespace App\Filament\Resources\Vechiles\Pages;

use App\Filament\Resources\Vechiles\VechileResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVechile extends EditRecord
{
    protected static string $resource = VechileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
