<?php

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
        $list = \App\Http\Constants\QPermission::getList();

        $role = \Spatie\Permission\Models\Role::create(['name' => 'superadmin']);
        foreach($list as $item)
        {
            $permission = \Spatie\Permission\Models\Permission::create(['name' => $item]);

            $permission->assignRole($role);
        }
    }
}
