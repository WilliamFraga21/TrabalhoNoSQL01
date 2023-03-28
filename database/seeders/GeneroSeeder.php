<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create([
            'genero' => 'Masculino'
        ]);
        Genero::create([
            'genero' => 'Feminino'
        ]);
        Genero::create([
            'genero' => 'Outros'
        ]);
    }
}
