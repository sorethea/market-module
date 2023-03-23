<?php

namespace Modules\Market\Providers;

use Modules\Market\Database\Seeders\MarketDatabaseSeeder;
use Modules\LAM\Providers\BaseUninstallServiceProvider;

class UninstallServiceProvider extends BaseUninstallServiceProvider
{
    public function uninstall()
    {
        $seed = new MarketDatabaseSeeder();
        $seed->rollback();
    }
}
