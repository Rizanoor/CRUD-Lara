<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => date('Y-m-d H:i:s', time()),
                'password' => bcrypt('password'),
                'roles' => 'ADMIN',
            ]
        );

        User::factory(15)->create();
    }
}
