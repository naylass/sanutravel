<?php

namespace App\Filament\Resources\VechileMaintenances;

use App\Filament\Resources\VechileMaintenances\Pages\CreateVechileMaintenance;
use App\Filament\Resources\VechileMaintenances\Pages\EditVechileMaintenance;
use App\Filament\Resources\VechileMaintenances\Pages\ListVechileMaintenances;
use App\Filament\Resources\VechileMaintenances\Pages\ViewVechileMaintenance;
use App\Filament\Resources\VechileMaintenances\Schemas\VechileMaintenanceForm;
use App\Filament\Resources\VechileMaintenances\Schemas\VechileMaintenanceInfolist;
use App\Filament\Resources\VechileMaintenances\Tables\VechileMaintenancesTable;
use App\Models\VechileMaintenance;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VechileMaintenanceResource extends Resource
{
    protected static ?string $model = VechileMaintenance::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'VechileMaintenance';

    public static function form(Schema $schema): Schema
    {
        return VechileMaintenanceForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VechileMaintenanceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VechileMaintenancesTable::configure($table);
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
            'index' => ListVechileMaintenances::route('/'),
            'create' => CreateVechileMaintenance::route('/create'),
            'view' => ViewVechileMaintenance::route('/{record}'),
            'edit' => EditVechileMaintenance::route('/{record}/edit'),
        ];
    }
}
