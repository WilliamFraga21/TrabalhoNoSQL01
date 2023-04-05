<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colaborador>
 */
class ColaboradorFactory extends Factory
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
            'nome' => $faker->name(),
            'telefone' => $faker->phoneNumber(),
            'cpf' => $faker->cpf(),
            'email' => $faker->unique()->safeEmail(),
            'cep' => $faker->postcode(),
            'endereco' => $faker->streetName(),
            'numero' => $faker->randomNumber(3),
            'salario' => fake()->randomFloat(2, 2, 20000),
            'Data_Mes' => fake()->dateTimeThisDecade('2019-12-01'),
            'status' => $faker->numberBetween(0,1),
            'id_funcao' => fake()->numberBetween(1,12),
            'id_unidade' => fake()->numberBetween(1,10)
        ];
    }
}
