<?php

namespace Modules\Market\Filament\Resources\ShopResource\Pages;

use Modules\Market\Filament\Resources\ShopResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShop extends EditRecord
{
    protected static string $resource = ShopResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
