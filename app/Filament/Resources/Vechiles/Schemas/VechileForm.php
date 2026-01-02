<?php

namespace App\Filament\Resources\Vechiles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VechileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('plate_number')
                    ->required(),
                TextInput::make('brand')
                    ->required(),
                TextInput::make('model')
                    ->required(),
                TextInput::make('color')
                    ->required(),
                TextInput::make('capacity')
                    ->required()
                    ->numeric(),
                Select::make('type')
                    ->options(['car' => 'Car', 'motorcycle' => 'Motorcycle', 'truck' => 'Truck'])
                    ->required(),
                TextInput::make('mileage')
                    ->required()
                    ->numeric(),
                TextInput::make('last_maintenance_km')
                    ->numeric(),
                Select::make('status')
                    ->options(['available' => 'Available', 'on_trip' => 'On trip', 'under_maintenance' => 'Under maintenance'])
                    ->default('available')
                    ->required(),
            ]);
    }
}
