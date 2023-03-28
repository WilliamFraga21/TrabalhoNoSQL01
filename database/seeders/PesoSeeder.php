<?php

namespace Database\Seeders;

use App\Models\Peso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peso::factory()->count(1500)->create();
    }
}
