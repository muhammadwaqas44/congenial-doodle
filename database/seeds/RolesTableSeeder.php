<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Admin', 'Consultant','Editor','Client'];

        foreach ($roles as $role) {
            App\Role::create(['name' => $role]);
        }
    }
}
