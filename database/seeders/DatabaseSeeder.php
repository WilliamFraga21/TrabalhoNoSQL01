<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\NotaFiscal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UnidadeSeeder::class,
            FuncaoSeeder::class,
            CaixaSeeder::class,
            ColaboradorSeeder::class,
            GeneroSeeder::class,
            ClienteSeeder::class,
            FornecedorSeeder::class,
            CompraEstoqueSeeder::class,
            EntradaProdutoSeeder::class,
            EstoqueSeeder::class,
            ProdutosSeeder::class,
            LitroSeeder::class,
            PesoSeeder::class,
            VendedorSeeder::class,
            CarrinhoSeeder::class,
            TipoPagamentoSeeder::class,
            NotaFiscalSeeder::class,
            ComissaoSeeder::class,


        ]);
    }
}
