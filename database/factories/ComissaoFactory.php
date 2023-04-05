<?php

namespace Database\Factories;

use App\Models\NotaFiscal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comissao>
 */
class ComissaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'valor_venda' => fake()->randomFloat(2,300,7000),
            'lucro' => fake()->randomFloat(2,50,3000),
            'comissao' => fake()->randomFloat(2,20,1000),
            'Data_Comissao' => fake()->dateTimeThisDecade('2019-12-01'),
            'status' => fake()->numberBetween(0,1),
            'nota_fiscal_id' => NotaFiscal::all()->random()->id,
        ];
    }
}
