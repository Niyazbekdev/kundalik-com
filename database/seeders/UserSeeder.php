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
            'phone' => '+998999999999',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Ruslan',
            'phone' => '+998907007070',
            'password' => Hash::make('123'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Niyazbek',
            'phone' => '+998907056963',
            'password' => Hash::make('123'),
        ]);
    }
}
