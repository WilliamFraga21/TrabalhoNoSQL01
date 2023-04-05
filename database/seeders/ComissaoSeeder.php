<?php

namespace Database\Seeders;

use App\Models\Comissao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comissao::factory()->count(35000)->create();
    }
}
