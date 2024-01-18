<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
            [
                [
                    'name' => 'Administaror',
                    'username' => 'admin',
                    'password' => bcrypt('admin'),
                    'level' => 1,
                    'email' => 'admin@gmail.com'
                ],
                [
                    'name' => 'Asgardian',
                    'username' => 'asgard',
                    'password' => bcrypt('asgard'),
                    'level' => 2,
                    'email' => 'asgard@gmail.com'
                ]
            ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
