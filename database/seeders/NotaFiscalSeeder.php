<?php

namespace Database\Seeders;

use App\Models\NotaFiscal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaFiscalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NotaFiscal::factory()->count(9000)->create();
    }
}
