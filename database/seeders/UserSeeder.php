<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Ruslan',
            'email' => 'ruslan@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '+998907007070'
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Niyazbek',
            'email' => 'niyazbek@gmail.com',
            'password' => Hash::make('123'),
            'phone' => '+998907056963'
        ]);
    }
}
