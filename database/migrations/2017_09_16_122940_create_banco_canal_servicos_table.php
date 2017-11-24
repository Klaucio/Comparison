<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancoCanalServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco_canal_servicos', function (Blueprint $table) {
            $table->integer('banco_id')->unsigned();
            $table->integer('servico_id')->unsigned();
            $table->integer('canal_id')->unsigned()->nullable();
            $table->foreign('banco_id')->references('id')->on('bancos');
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->foreign('canal_id')->references('id')->on('canals');
            $table->decimal('preco',15,2)->nullable();
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
        Schema::dropIfExists('banco_canal_servicos');
    }
}
