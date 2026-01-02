<?php

namespace App\Filament\Resources\Vechiles;

use App\Filament\Resources\Vechiles\Pages\CreateVechile;
use App\Filament\Resources\Vechiles\Pages\EditVechile;
use App\Filament\Resources\Vechiles\Pages\ListVechiles;
use App\Filament\Resources\Vechiles\Pages\ViewVechile;
use App\Filament\Resources\Vechiles\Schemas\VechileForm;
use App\Filament\Resources\Vechiles\Schemas\VechileInfolist;
use App\Filament\Resources\Vechiles\Tables\VechilesTable;
use App\Models\Vechile;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VechileResource extends Resource
{
    protected static ?string $model = Vechile::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Vechile';

    public static function form(Schema $schema): Schema
    {
        return VechileForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VechileInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VechilesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVechiles::route('/'),
            'create' => CreateVechile::route('/create'),
            'view' => ViewVechile::route('/{record}'),
            'edit' => EditVechile::route('/{record}/edit'),
        ];
    }
}
