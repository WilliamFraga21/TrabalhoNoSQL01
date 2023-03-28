<?php

namespace Database\Factories;

use App\Models\CompraEstoque;
use App\Models\EntradaProduto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estoque>
 */
class EstoqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantidade' => fake()->numberBetween(3, 20),
            'unidade_fardo' => fake()->numberBetween(3, 100),
            'data_vencimento' => fake()->dateTimeThisDecade('2025-03-01'),
            'quantidade_minima' => 3,
            'id_entradaprodutos' => $this->faker->unique()->numberBetween(1, EntradaProduto::count())

        ];
    }
}
