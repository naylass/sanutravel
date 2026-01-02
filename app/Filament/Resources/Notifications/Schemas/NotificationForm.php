<?php

namespace App\Filament\Resources\Notifications\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NotificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('booking_id')
                    ->numeric(),
                TextInput::make('message')
                    ->required(),
                Select::make('type')
                    ->options([
            'booking' => 'Booking',
            'payment' => 'Payment',
            'reminder' => 'Reminder',
            'cancel' => 'Cancel',
            'maintenance' => 'Maintenance',
        ])
                    ->required(),
                Select::make('status')
                    ->options(['unread' => 'Unread', 'read' => 'Read'])
                    ->default('unread')
                    ->required(),
            ]);
    }
}
