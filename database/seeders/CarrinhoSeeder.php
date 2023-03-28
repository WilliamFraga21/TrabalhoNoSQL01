<?php

namespace Database\Seeders;

use App\Models\Carrinho;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrinhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrinho::factory()->count(10000)->create();
    }
}
