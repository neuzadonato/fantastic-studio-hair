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
        Schema::create('saloes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('razao_social');
            $table->integer('email');
            $table->integer('endereco');
            $table->string('telefone');
            $table->text('salaografia');
            $table->string('foto')->nullable()->default('');
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
        Schema::dropIfExists('saloes');
    }
};
