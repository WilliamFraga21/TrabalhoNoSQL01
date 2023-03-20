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
        Schema::create('litros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produto')->unique();
            $table->decimal('litro');
            $table->decimal('unidade_medida');
            $table->timestamps();
        });

        Schema::table('litros', function (Blueprint $table) {
            $table->foreign('id_produto')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('litros');
    }
};
