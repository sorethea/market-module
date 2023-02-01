<?php

namespace Modules\Market\Filament\Resources\ExtraResource\Pages;

use Modules\Market\Filament\Resources\ExtraResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExtras extends ListRecords
{
    protected static string $resource = ExtraResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
