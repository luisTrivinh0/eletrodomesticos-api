<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEletrodomesticosTable extends Migration
{
    public function up()
    {
        Schema::create('eletrodomesticos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->string('tensao');
            $table->enum('marca', ['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eletrodomesticos');
    }
}