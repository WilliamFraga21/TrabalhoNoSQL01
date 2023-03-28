<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caixas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_funcionario');
            $table->decimal('valor_disponivel');
            $table->decimal('valor_recebe');
            $table->decimal('valor_agua');
            $table->decimal('valor_luz');
            $table->decimal('valor_aluguel');
            $table->dateTime('Data_Mes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caixas');
    }
};
