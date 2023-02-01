<?php

namespace Modules\Market\Filament\Resources\CouponResource\Pages;

use Modules\Market\Filament\Resources\CouponResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoupons extends ListRecords
{
    protected static string $resource = CouponResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
