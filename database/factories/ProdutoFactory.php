<?php

namespace Database\Factories;

use App\Models\Estoque;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        fake()->locale('pt-BR');
        return [
            'nome' => fake()->word(),
            'valor_minimo' => fake()->randomFloat(2,15,100),
            'valor' => fake()->randomFloat(2,30,150),
            'quantidade' => fake()->numberBetween(1,10),
            'marca' => fake()->word(),
            'status' => fake()->numberBetween(0,1),
            'id_estoque' => Estoque::all()->random()->id,
        ];
    }
}
