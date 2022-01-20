<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;

use App\Models\User;


use Hash;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
       // ADMIN PERMISSIONS 
        // $role = Role::find(1);
        // $permissions = Permission::pluck('id','id');  
        // $role->syncPermissions($permissions);

         // USER AND HOST PERMISSIONS 
         $permissionArr = array(
            'booking-request-list',
            'booking-request-edit',
            'booking-list'
        );
        $roles = Role::find(3);
        $permissionss = Permission::whereIn('name',$permissionArr)->pluck('id','id');  
        $roles->syncPermissions($permissionss);
    }
}
