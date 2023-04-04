<?php

namespace Modules\Market\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Market\View\Components\nav\item;

class ComponentServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //\Blade::components(["item"=>item::class],"market-nav-");
        \Blade::component(item::class,"item","market-nav-");
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
