<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::insert([
            'isAdmin' => TRUE,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '081234561123',
            'address' => 'Jl. Soeharto-Hatta',
            'name' => 'Admin',
        ]);
        User::insert([
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '081234561123',
            'address' => 'Jl. Soeharto-Hatta',
            'name' => 'User Gaming',
        ]);

        $this->call([
            ProductSeeders::class,
        ]);
    }
}
