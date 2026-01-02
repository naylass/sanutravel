<?php

namespace App\Filament\Resources\VechileMaintenances\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VechileMaintenanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('vechile_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('maintenance_date')
                    ->required(),
                TextInput::make('odometer_km')
                    ->required()
                    ->numeric(),
                TextInput::make('next_maintenance_km')
                    ->required()
                    ->numeric(),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['pending' => 'Pending', 'completed' => 'Completed'])
                    ->default('completed')
                    ->required(),
            ]);
    }
}
