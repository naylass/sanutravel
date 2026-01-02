<?php

namespace App\Filament\Resources\VechileMaintenances\Pages;

use App\Filament\Resources\VechileMaintenances\VechileMaintenanceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVechileMaintenances extends ListRecords
{
    protected static string $resource = VechileMaintenanceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
