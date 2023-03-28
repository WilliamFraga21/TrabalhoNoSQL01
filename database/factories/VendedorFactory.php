<?php

namespace Database\Factories;

use App\Models\Colaborador;
use App\Models\Funcao;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VendedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'caixa' => fake()->numberBetween(1,10),
            'data_dia' => fake()->dateTimeThisDecade('2019-03-01'),
            'id_colaborador' => Colaborador::all()->random()->id,
        ];
    }
}
