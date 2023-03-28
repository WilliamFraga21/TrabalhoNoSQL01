<?php

namespace Database\Factories;


use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Litro>
 */
class LitroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'litro' => fake()->randomFloat(1,0.5,5),
            'unidade_medida' => fake()->randomNumber(1,15),
            'id_produto' => fake()->numberBetween(1,Produto::count()),
        ];
    }
}
