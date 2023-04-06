<?php

namespace Modules\Market\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Modules\Market\View\Components\Nav\Auth;
use Modules\Market\View\Components\Nav\Dropdown;
use Modules\Market\View\Components\Nav\Item;
use Modules\Market\View\Components\Nav\Logout;
use Modules\Market\View\Components\Nav\Profile;
use Modules\Market\View\Components\Page\Brand;
use Modules\Market\View\Components\Page\Loading;
use Modules\Market\View\Components\Page\Logo;

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
            "nav-profile"=>Profile::class,
            "nav-logout"=>Logout::class,
            "nav-auth"=>Auth::class,
            "page-loading"=>Loading::class,
            "page-brand"=>Brand::class,
            "page-logo"=>Logo::class,
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
