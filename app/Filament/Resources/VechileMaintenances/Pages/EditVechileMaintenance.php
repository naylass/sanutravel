<?php

namespace App\Filament\Resources\VechileMaintenances\Pages;

use App\Filament\Resources\VechileMaintenances\VechileMaintenanceResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVechileMaintenance extends EditRecord
{
    protected static string $resource = VechileMaintenanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
