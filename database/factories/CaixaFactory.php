<?php

namespace Database\Factories;

use App\Models\Unidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caixa>
 */
class CaixaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'valor_funcionario' => fake()->randomFloat(2, 2, 80000),
            'valor_disponivel' => fake()->randomFloat(2, 2, 200000),
            'valor_recebe' => fake()->randomFloat(2, 2, 420000),
            'valor_agua' => fake()->randomFloat(2, 2, 9000),
            'valor_luz' => fake()->randomFloat(2, 2, 15000),
            'valor_aluguel' => fake()->randomFloat(2, 2, 20000),
            'Data_Mes' => fake()->dateTimeThisDecade('2019-03-01'),
            'id_unidade' => Unidade::all()->random()->id,
        ];
    }
}
