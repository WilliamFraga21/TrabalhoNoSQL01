<?php

namespace Database\Factories;

use App\Models\Caixa;
use App\Models\Colaborador;
use Faker\Provider\pt_BR\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unidade>
 */
class UnidadeFactory extends Factory
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
            'endereco' => $faker->streetName(),
            'numero' => $faker->randomNumber(),
            'cep' => $faker->postcode(),
            'cidade' => $faker->city(),
            'caixas_id' => Caixa::all()->random()->id,
            'colaboradores_id' => Colaborador::all()->random()->id,
            'data_fundacao' => $faker->date('1970-03-01')
        ];
    }
}
