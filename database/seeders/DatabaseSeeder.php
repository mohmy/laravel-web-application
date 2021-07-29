<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Demo La Nie',
            'email' => 'demo-la-nie@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::factory(10)->create();
    }
}
