<?php

namespace App\Filament\Resources\Vechiles\Pages;

use App\Filament\Resources\Vechiles\VechileResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVechiles extends ListRecords
{
    protected static string $resource = VechileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
