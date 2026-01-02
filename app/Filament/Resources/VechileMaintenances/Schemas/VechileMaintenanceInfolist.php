<?php

namespace App\Filament\Resources\VechileMaintenances\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VechileMaintenanceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('vechile_id')
                    ->numeric(),
                TextEntry::make('maintenance_date')
                    ->date(),
                TextEntry::make('odometer_km')
                    ->numeric(),
                TextEntry::make('next_maintenance_km')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
