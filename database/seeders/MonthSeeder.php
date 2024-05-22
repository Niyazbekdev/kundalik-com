<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonthSeeder extends Seeder
{
    public function run(): void
    {
        Month::create([
            'id' => 1,
            'name' => 'Januari',
        ]);
    }
}
