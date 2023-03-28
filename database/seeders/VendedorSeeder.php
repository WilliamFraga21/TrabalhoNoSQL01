<?php

namespace Database\Seeders;

use App\Models\Vendedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendedor::factory()->count(120)->create();
    }
}
