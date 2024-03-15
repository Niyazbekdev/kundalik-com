<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run(): void
    {
        Status::create([
            'name' => 'usi ay ushin tolendi',
        ]);

        Status::create([
            'name' => 'pitkerdi',
        ]);

        Status::create([
            'name' => 'tolenbedi',
        ]);

        Status::create([
            'name' => 'sabaqlarga toliq qatnaspadi',
        ]);
    }
}
