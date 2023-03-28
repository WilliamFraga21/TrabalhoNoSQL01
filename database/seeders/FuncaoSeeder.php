<?php

namespace Database\Seeders;


use App\Models\Funcao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FuncaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcao::create([
            'funcao' => 'Vendedor'
        ]);
        Funcao::create([
            'funcao' => 'Gerente'
        ]);
        Funcao::create([
            'funcao' => 'Faxineiro'
        ]);
        Funcao::create([
            'funcao' => 'Repositor'
        ]);
        Funcao::create([
            'funcao' => 'Diretor'
        ]);
        Funcao::create([
            'funcao' => 'Administrador'
        ]);
        Funcao::create([
            'funcao' => 'Segurança'
        ]);
        Funcao::create([
            'funcao' => 'RH'
        ]);
        Funcao::create([
            'funcao' => 'Contador'
        ]);
        Funcao::create([
            'funcao' => 'Estagiário'
        ]);
        Funcao::create([
            'funcao' => 'Desenvolvedor'
        ]);
        Funcao::create([
            'funcao' => 'Supervisor'
        ]);
    }
}
