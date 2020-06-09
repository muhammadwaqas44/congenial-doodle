<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 1,
                "email" => "admin@fghospitality.com",
                "password" => bcrypt("12345"),
                "actual_password" => "12345",
                "name" => "Admin",
                "phone" => "03123769495",
                "status" => 1,
                'role_id' => [1],
                "gender" => 'Male',
            ],
            [
                'id' => 2,
                "email" => "consultant@fghospitality.com",
                "password" => bcrypt("12345"),
                "actual_password" => "12345",
                "name" => "Consultant",
                "phone" => "03123769495",
                "status" => 1,
                'role_id' => [2],
                "gender" => 'Male',
            ],
            [
                'id' => 3,
                "email" => "editor@fghospitality.com",
                "password" => bcrypt("12345"),
                "actual_password" => "12345",
                "name" => "Editor",
                "phone" => "03123769495",
                "status" => 1,
                'role_id' => [3],
                "gender" => 'Male',
            ],
            [
                'id' => 4,
                "email" => "client@fghospitality.com",
                "password" => bcrypt("12345"),
                "actual_password" => "12345",
                "name" => "Client",
                "phone" => "03123769495",
                "status" => 1,
                'role_id' => [4],
                "gender" => 'Male',
            ],
        ];
        foreach ($users as $user) {
            \App\User::create([
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'actual_password' => $user['actual_password'],
                'phone' => $user['phone'],
                'status' => $user['status'],
                'gender' => $user['gender'],
            ]);
            foreach ($user['role_id'] as $role) {
                \App\UserRole::create([
                    'role_id' => $role,
                    'user_id' => $user['id'],
                ]);
            }

        }
        \App\Company::create([
            'title' => 'Demo',
            'status' => 1,
            'access_level' => 'Location/Sub-brand',
            'notes' => 'For Just Testing.............!',
            'user_id' => 4,
            'created_by' => 1,
        ]);

    }
}
