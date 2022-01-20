<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'ADMIN']);
        $role = Role::create(['name' => 'MANAGER']);
        $role = Role::create(['name' => 'ISTRUCTOR']);
        $role = Role::create(['name' => 'STUDENT']);
    }
}
