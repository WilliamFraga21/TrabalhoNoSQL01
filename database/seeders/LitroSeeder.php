<?php

namespace Database\Seeders;

use App\Models\Litro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LitroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Litro::factory()->count(1500)->create();

    }
}
