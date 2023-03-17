<?php

namespace Modules\Market\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies=[];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerPolicies();
    }

}
