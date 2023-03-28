<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Vendedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarrinhoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'valor' => fake()->randomFloat(2,300,7000),
            'quantidade' =>fake()->numberBetween(1,10),
            'Data_Venda' =>fake()->dateTimeThisDecade('2019-12-01'),
            'status' =>fake()->numberBetween(0,2),
            'id_clientes' => Cliente::all()->random()->id,
            'id_produtos' => Produto::all()->random()->id,
            'id_vendedores' => Vendedor::all()->random()->id,


        ];
    }
}
