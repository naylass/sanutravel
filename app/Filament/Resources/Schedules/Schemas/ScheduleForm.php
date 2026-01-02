<?php

namespace App\Filament\Resources\Schedules\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class ScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('departure_date')
                    ->required(),
                TimePicker::make('departure_time')
                    ->required(),
                TextInput::make('pickup_point')
                    ->required(),
                TextInput::make('destination')
                    ->required(),
                TextInput::make('vechile_id')
                    ->required()
                    ->numeric(),
                TextInput::make('driver_id')
                    ->required()
                    ->numeric(),
                TextInput::make('service_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
