<?php

namespace Modules\Market\Providers;

use Modules\Market\Database\Seeders\MarketDatabaseSeeder;
use Modules\LAM\Providers\BaseUninstallServiceProvider;
use Modules\Market\Database\Settings\CreateMarketSettings;

class UninstallServiceProvider extends BaseUninstallServiceProvider
{
    private array $settings =[
        CreateMarketSettings::class,
    ];
    public function uninstall()
    {
        $seed = new MarketDatabaseSeeder();
        $seed->rollback();

        foreach ($this->settings as $setting){
            $settingObj = new $setting();
            $settingObj?->down();
        }
    }
}
