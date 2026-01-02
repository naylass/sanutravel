<?php

namespace App\Filament\Resources\Schedules\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ScheduleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('departure_date')
                    ->date(),
                TextEntry::make('departure_time')
                    ->time(),
                TextEntry::make('pickup_point'),
                TextEntry::make('destination'),
                TextEntry::make('vechile_id')
                    ->numeric(),
                TextEntry::make('driver_id')
                    ->numeric(),
                TextEntry::make('service_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
