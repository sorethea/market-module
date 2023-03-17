<?php

namespace Modules\Market\Providers;;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class ResourceServiceProvider extends PluginServiceProvider
{
    public function isEnabled(): bool{
        $module = \Lam::find('market');
        return $module->isEnabled();
    }
    protected array $pages = [];
    protected array $resources =[];
    public function configurePackage(Package $package): void
    {
        $package->name('market-module');
    }

    public function getResources(): array
    {
        return ($this->isEnabled())?$this->resources:[];
    }

    public function getPages(): array
    {
        return ($this->isEnabled())?$this->pages:[];
    }

    public function boot()
    {
        Filament::serving(function (){
            if(config('market.navigation.enabled'))
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                    ->label(config('market.navigation.name'))
            ]);
        });
        return parent::boot();
    }
}
