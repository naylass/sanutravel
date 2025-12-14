<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Layanan')
                    ->required(),

                Select::make('type')
                    ->label('Jenis Layanan')
                    ->options([
                        'reguler' => 'Reguler',
                        'eksklusif' => 'Eksklusif',
                    ])
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set) =>
                        $set('can_choose_time', $state === 'eksklusif')
                    ),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3)
                    ->nullable(),

                Toggle::make('can_choose_time')
                    ->label('Bisa Pilih Waktu Penjemputan')
                    ->disabled(), // otomatis dari jenis layanan
            ]);
    }
}