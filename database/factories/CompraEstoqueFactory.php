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
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'Nome_Produto' => $faker->unique()->word(1),
            'data_compra' => fake()->dateTimeThisDecade('2019-12-01'),
            'valor_pago' => fake()->randomFloat(2, 2, 20000),
            'status' => fake()->numberBetween(0,1),
            'id_unidades' => Unidade::all()->random()->id,
            'id_fornecedores' => Fornecedor::all()->random()->id,
        ];
    }
}
