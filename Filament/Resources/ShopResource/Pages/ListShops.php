<?php

namespace Modules\Market\Filament\Resources\ShopResource\Pages;

use Modules\Market\Filament\Resources\ShopResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListShops extends ListRecords
{
    protected static string $resource = ShopResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
