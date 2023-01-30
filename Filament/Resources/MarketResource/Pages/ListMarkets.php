<?php

namespace Modules\Market\Filament\Resources\MarketResource\Pages;

use Modules\Market\Filament\Resources\MarketResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarkets extends ListRecords
{
    protected static string $resource = MarketResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
