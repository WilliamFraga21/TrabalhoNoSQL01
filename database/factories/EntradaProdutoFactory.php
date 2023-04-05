<?php

namespace Database\Factories;

use App\Models\CompraEstoque;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EntradaProduto>
 */
class EntradaProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantidade' => fake()->numberBetween(1,10),
            'fardo' => fake()->numberBetween(50, 200),
            'data_entrada' => fake()->dateTimeThisDecade('2019-12-01'),
            'compra_estoques_id' => CompraEstoque::all()->unique()->random()->id
        ];
    }
}
