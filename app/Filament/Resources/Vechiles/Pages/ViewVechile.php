<?php

namespace App\Filament\Resources\Vechiles\Pages;

use App\Filament\Resources\Vechiles\VechileResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVechile extends ViewRecord
{
    protected static string $resource = VechileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
