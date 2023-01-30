<?php

namespace Modules\Market\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Filament\PluginServiceProvider;
use Modules\Market\Filament\Resources\CustomerResource;
use Modules\Market\Filament\Resources\MarketResource;
use Modules\Market\Filament\Resources\ProductResource;
use Spatie\LaravelPackageTools\Package;
use Modules\Market\Filament\Pages\MarketPage;

class FilamentServiceProvider extends PluginServiceProvider
{
    public function isEnabled(): bool{
        $module = \Module::find('market');
        return $module->isEnabled();
    }
    protected array $pages = [];
    protected array $resources =[
        CustomerResource::class,
        MarketResource::class,
        ProductResource::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name('market');
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
