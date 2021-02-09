<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->save();


        $role = new Role();
        $role->name = 'Học Sinh';
        $role->save();


        $role = new Role();
        $role->name = 'Cô giáo';
        $role->save();

        $role = new Role();
        $role->name = 'Ban giám hiệu';
        $role->save();

        $role = new Role();
        $role->name = 'Giáo vụ';
        $role->save();
    }
}
