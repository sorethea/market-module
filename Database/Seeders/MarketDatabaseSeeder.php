<?php

namespace Modules\Market\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MarketDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(PermissionTableSeeder::class);
    }

    public function rollback()
    {
        $permissionTableSeeder = new PermissionTableSeeder();
        $permissionTableSeeder->rollback();

    }
}
