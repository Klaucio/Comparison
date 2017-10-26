<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecursoServico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('recurso_servico', function (Blueprint $table) {
            $table->integer('recurso_id')->unsigned();
            $table->integer('servico_id')->unsigned();
            $table->foreign('recurso_id')->references('id')->on('recursos');
            $table->foreign('servico_id')->references('id')->on('servicos');
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
