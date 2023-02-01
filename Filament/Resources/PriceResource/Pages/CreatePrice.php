<?php

namespace Modules\Market\Filament\Resources\PriceResource\Pages;

use Modules\Market\Filament\Resources\PriceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrice extends CreateRecord
{
    protected static string $resource = PriceResource::class;
}
