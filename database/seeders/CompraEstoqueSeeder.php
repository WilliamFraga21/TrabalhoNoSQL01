<?php

namespace Database\Seeders;

use App\Models\CompraEstoque;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompraEstoqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompraEstoque::factory()->count(7000)->create();
    }
}
