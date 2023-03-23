<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateMarketSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('market.title',"HiEAT");
        $this->migrator->add('market.loading_msg',"HiEAT, experience with the best delivery services.");
    }

    public function down(): void
    {
        $this->migrator->delete('market.title');
        $this->migrator->delete('market.loading_msg');
    }
}
