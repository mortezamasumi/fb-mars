<?php

namespace Mortezamasumi\FbMars\Resources\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Mortezamasumi\FbMars\Resources\FbMarsResource;

class ListFbMars extends ListRecords
{
    protected static string $resource = FbMarsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
