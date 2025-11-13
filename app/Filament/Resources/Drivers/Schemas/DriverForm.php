<?php

namespace App\Filament\Resources\Drivers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Carbon\Carbon;

class DriverForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('birth_place')
                    ->label('Birth Place')
                    ->required(),
                DatePicker::make('birth_date')
                    ->date()
                    ->required()
                     ->afterStateUpdated(function ($state, callable $set) {
                        if ($state) {
                            $set('age', Carbon::parse($state)->age);
                        }
                    }),
                Select::make('gender')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('medical_history')
                    ->required(),
                TextInput::make('license_number')
                    ->required(),
                FileUpload::make('photo')
                    ->image()
                    ->directory('drivers')
                    ->imagePreviewHeight('120')
                    ->maxSize(2048)
                    ->required(),
                Select::make('status')
                    ->options(['available' => 'Available', 'unavailable' => 'Unavailable', 'on_trip' => 'On trip'])
                    ->default('available')
                    ->required(),
            ]);
    }
}
