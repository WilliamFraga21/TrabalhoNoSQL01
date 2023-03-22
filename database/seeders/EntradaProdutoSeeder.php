<?php

namespace Database\Seeders;

use App\Models\EntradaProduto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntradaProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EntradaProduto::factory()->count(50)->create();
    }
}
