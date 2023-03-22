<?php

namespace Database\Factories;

use App\Models\CompraEstoque;
use App\Models\Fornecedor;
use App\Models\Unidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompraEstoque>
 */
class CompraEstoqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'data_compra' => fake()->date('1970-03-01'),
            'valor_pago' => fake()->randomFloat(2, 2, 20000),
            'status' => fake()->numberBetween(0,1),
            'unidades_id' => Unidade::all()->random()->id,
            'fornecedores_id' => Fornecedor::all()->random()->id,
        ];
    }
}
