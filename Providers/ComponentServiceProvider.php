<?php

namespace Modules\Market\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\Market\View\Components\Nav\Dropdown;
use Modules\Market\View\Components\Nav\Item;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        Blade::components([
            "nav-item"=>Item::class,
            "nav-dropdown"=>Dropdown::class,
        ],'market');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
