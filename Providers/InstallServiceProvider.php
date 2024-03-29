<?php

namespace Modules\Market\Providers;

use Modules\Market\Database\Seeders\MarketDatabaseSeeder;
use Modules\LAM\Providers\BaseInstallServiceProvider;
use Modules\Market\Database\Settings\CreateMarketSettings;

class InstallServiceProvider extends BaseInstallServiceProvider
{

    public function install()
    {
        $seed = new MarketDatabaseSeeder();
        $seed?->run();
    }
}
