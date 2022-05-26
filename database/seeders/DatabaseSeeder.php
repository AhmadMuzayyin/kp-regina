<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\User::create([
            'name' => 'Ahmad Muzayyin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'isAdmin' => 'admin'
        ]);
        \App\Models\User::create([
            'name' => 'Ahmad Muzayyin',
            'email' => 'pimpinan@gmail.com',
            'password' => bcrypt('12345'),
            'isAdmin' => 'pimpinan'
        ]);
    }
}
