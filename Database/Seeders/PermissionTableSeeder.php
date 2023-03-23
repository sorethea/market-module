<?php

namespace Modules\Market\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\HR\Models\Company;
use Modules\HR\Models\Employee;
use Modules\LAM\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        $customer = Role::findOrCreate("customer");
        $vendor = Role::findOrCreate("vendor");
        $admin = Role::findByName("admin");
        $module = "market";
        $models =[
            "markets",
        ];
        foreach ($models as $model){
            $levels = [
                'viewAny',
                'view',
                'create',
                'update',
                'delete',
                'forceDelete',
                'manager',
            ];
            foreach ($levels as $level){
                $permission = Permission::findOrCreate($model.'.'.$level);
                if(!empty($permission)){
                    $permission->module = $module;
                    $permission->save();
                    if($level=="manager"){
                        $admin->givePermissionTo($permission);
                    }
                }
            }
        }
        $user = User::firstOrCreate([
            "name"=>"Customer",
            "email"=>"customer@demo.com",
            "password"=>Hash::make("12345678"),
        ]);
        $user->assignRole($customer);
        $user1 = User::firstOrCreate([
            "name"=>"Vendor",
            "email"=>"vendor@demo.com",
            "password"=>Hash::make("12345678"),
        ]);
        $user1->assignRole($vendor);
    }

    public function rollback(){
        Model::unguard();
        try{
            $user = User::where("email","customer@demo.com")->first();
            if(!empty($user)){
                $user->removeRole("customer");
                $user->delete();
            }
            $role = Role::where("name","customer")->first();
            if(!empty($role)){
                $role->permissions()->detach();
                $role->delete();
            }
            $user1 = User::where("email","vendor@demo.com")->first();
            if(!empty($user1)){
                $user1->removeRole("vendor");
                $user1->delete();
            }
            $role1 = Role::where("name","vendor")->first();
            if(!empty($role1)){
                $role1->permissions()->detach();
                $role1->delete();
            }
            Permission::where("module","market")->delete();
        }catch (\Throwable $exception){
            info($exception->getMessage());
        }

    }
}
