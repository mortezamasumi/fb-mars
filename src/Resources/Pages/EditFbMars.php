<?php

namespace Mortezamasumi\FbMars\Resources\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Mortezamasumi\FbMars\Resources\FbMarsResource;

class EditFbMars extends EditRecord
{
    protected static string $resource = FbMarsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
