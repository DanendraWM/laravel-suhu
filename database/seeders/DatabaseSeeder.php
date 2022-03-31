<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\sensor;
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
        sensor::create([
            'suhu'=>33.3,
            'kelembapan'=>77.2
        ]);
        user::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'level' => 'user',
        ]);
        user::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'level' => 'admin',
        ]);

    }
}
