<?php

namespace Database\Seeders;

use App\Models\Genero;
use App\Models\TipoPagamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPagamento::create([
            'forma_pagamento' => 'Dinherio'
        ]);
        TipoPagamento::create([
            'forma_pagamento' => 'Cartão/Debito'
        ]);
        TipoPagamento::create([
            'forma_pagamento' => 'Cartão/Crédito'
        ]);
        TipoPagamento::create([
            'forma_pagamento' => 'PIX'
        ]);
        TipoPagamento::create([
            'forma_pagamento' => 'Cheque'
        ]);
    }
}
