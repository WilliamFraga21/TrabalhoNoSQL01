<?php

namespace Database\Factories;

use App\Models\Carrinho;
use App\Models\NotaFiscal;
use App\Models\TipoPagamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NotaFiscal>
 */
class NotaFiscalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'valor_pago' => fake()->randomFloat(2,300,7000),
            'lucro' => fake()->randomFloat(2,50,4000),
            'Data_NotaFiscal' => fake()->dateTimeThisDecade('2019-12-01'),
            'tipo_pagamentos_id' => TipoPagamento::all()->random()->id,
            'carrinhos_id' => Carrinho::all()->random()->id,
        ];
    }
}
