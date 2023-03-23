<?php

namespace Modules\Market\Settings;

use Spatie\LaravelSettings\Settings;

class MarketSetting extends Settings
{
    public string $loading_msg='';

    public static function group(): string
    {
        return 'market';
    }
}
