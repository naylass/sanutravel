<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;

class ServiceInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Layanan')
                    ->columns(2)
                    ->schema([
                        TextEntry::make('name')
                            ->label('Nama Layanan')
                            ->weight('bold'),

                        TextEntry::make('type')
                            ->label('Jenis Layanan')
                            ->badge()
                            ->colors([
                                'success' => 'eksklusif',
                                'gray' => 'reguler',
                            ]),

                        TextEntry::make('description')
                            ->label('Deskripsi')
                            ->columnSpanFull(),

                        IconEntry::make('can_choose_time')
                            ->label('Bisa Pilih Waktu Penjemputan')
                            ->boolean(),
                    ]),
            ]);
    }
}