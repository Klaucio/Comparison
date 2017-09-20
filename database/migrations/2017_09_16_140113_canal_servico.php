<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CanalServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('canal_servico', function (Blueprint $table) {
            $table->integer('canal_id')->unsigned();
            $table->integer('servico_id')->unsigned();
            $table->integer('banco_id')->unsigned();
            $table->foreign('canal_id')->references('id')->on('canals');
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->foreign('banco_id')->references('id')->on('bancos');
            $table->decimal('preco',15,2);
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
        //
    }
}
