<?php

namespace App\Filament\Resources\VechileMaintenances\Pages;

use App\Filament\Resources\VechileMaintenances\VechileMaintenanceResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVechileMaintenance extends ViewRecord
{
    protected static string $resource = VechileMaintenanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
