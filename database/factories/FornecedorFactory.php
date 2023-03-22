<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
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
            'empresa' => $faker->sentence(3),
            'cnpj' => $faker->cnpj(),
            'tipo_produtos' => $faker->text(50),
            'status' => fake()->numberBetween(0,1)
        ];
    }
}
