<?php

namespace Database\Seeders;

use App\Models\Colaborador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colaborador::factory()->count(400)->create();
    }
}
