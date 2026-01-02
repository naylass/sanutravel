<?php

namespace App\Filament\Resources\DeliveryOrders\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class DeliveryOrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('booking_id')
                    ->required()
                    ->numeric(),
                TextInput::make('driver_id')
                    ->required()
                    ->numeric(),
                TextInput::make('vechile_id')
                    ->required()
                    ->numeric(),
                TextInput::make('schedule_id')
                    ->required()
                    ->numeric(),
                DatePicker::make('departure_date')
                    ->required(),
                TimePicker::make('departure_time')
                    ->required(),
                TextInput::make('pickup_point')
                    ->required(),
                TextInput::make('destination')
                    ->required(),
                Select::make('status')
                    ->options([
            'prepared' => 'Prepared',
            'ongoing' => 'Ongoing',
            'completed' => 'Completed',
            'canceled' => 'Canceled',
        ])
                    ->default('prepared')
                    ->required(),
            ]);
    }
}
