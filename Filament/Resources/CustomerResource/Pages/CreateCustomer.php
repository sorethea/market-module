<?php

namespace Modules\Market\Filament\Resources\CustomerResource\Pages;

use Modules\Market\Filament\Resources\CustomerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;
}
