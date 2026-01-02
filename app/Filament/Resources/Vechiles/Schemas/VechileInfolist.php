<?php

namespace App\Filament\Resources\Vechiles\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class VechileInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('plate_number'),
                TextEntry::make('brand'),
                TextEntry::make('model'),
                TextEntry::make('color'),
                TextEntry::make('capacity')
                    ->numeric(),
                TextEntry::make('type'),
                TextEntry::make('mileage')
                    ->numeric(),
                TextEntry::make('last_maintenance_km')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
