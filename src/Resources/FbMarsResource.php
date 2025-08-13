<?php

namespace Mortezamasumi\FbMars\Resources;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Mortezamasumi\FbMars\Models\FbMars;
use Mortezamasumi\FbMars\Resources\Pages\CreateFbMars;
use Mortezamasumi\FbMars\Resources\Pages\EditFbMars;
use Mortezamasumi\FbMars\Resources\Pages\ListFbMars;
use Mortezamasumi\FbMars\Resources\Schemas\FbMarsForm;
use Mortezamasumi\FbMars\Resources\Tables\FbMarsTable;

class FbMarsResource extends Resource
{
    protected static ?string $model = FbMars::class;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return FbMarsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FbMarsTable::configure($table);
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
            'index' => ListFbMars::route('/'),
            'create' => CreateFbMars::route('/create'),
            'edit' => EditFbMars::route('/{record}/edit'),
        ];
    }
}
