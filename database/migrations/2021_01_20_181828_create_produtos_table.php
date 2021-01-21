<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); //Esse campo espera um texto
            $table->decimal('custo',19,2); //Esse campo espera um numero do tipo decimal
            $table->decimal('preco',19,2); //Esse campo espera um numero do tipo decimal
            $table->integer('quantidade'); //Esse campo espera um numero do tipo inteiro
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
        Schema::dropIfExists('produtos');
    }
}
