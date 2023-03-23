<?php

namespace Modules\Market\Providers;

use Modules\Market\Database\Seeders\MarketDatabaseSeeder;
use Modules\LAM\Providers\BaseInstallServiceProvider;
use Modules\Market\Database\Settings\CreateMarketSettings;

class InstallServiceProvider extends BaseInstallServiceProvider
{
    private array $settings =[
        CreateMarketSettings::class,
    ];
    public function install()
    {
        $seed = new MarketDatabaseSeeder();
        $seed?->run();

        foreach ($this->settings as $setting){
            $settingObj = new $setting();
            $settingObj?->up();
        }
    }
}
