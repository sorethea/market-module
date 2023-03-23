<?php

namespace Modules\Market\Filament\Pages;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Modules\HR\Settings\HRSetting;
use Modules\Market\Settings\MarketSetting;

class MarketSettingPage extends SettingsPage
{
    protected function getTitle(): string
    {
        return config('market.setting.label');
    }

    protected static function getNavigationIcon(): string
    {
        return config('market.setting.icon');
    }

    protected static function getNavigationLabel(): string
    {
        return config('market.setting.label');
    }

    protected static function getNavigationGroup(): ?string
    {
        return config('market.setting-navigation.name');
    }

    protected static string $settings = MarketSetting::class;

    protected static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->can("markets.manager");
    }

    protected function getFormSchema(): array
    {
        return [
            Card::make([
                TextInput::make("loading_msg")->label("Loading Message")->required()
            ])
        ];
    }
}
