<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\pt_BR\Address;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
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
            'id_genero' => $faker->numberBetween(1,3),
            'email' => $faker->unique()->safeEmail(),
            'cep' => $faker->postcode(),
            'endereco' => $faker->streetName(),
            'numero' => $faker->randomNumber(),
            'bairro' => $faker->streetName(),
            'estado' => Address::state(),
            'status' => $faker->numberBetween(0,1)
        ];
    }
}
