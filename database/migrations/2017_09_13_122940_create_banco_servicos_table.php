<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBancoServicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco_servico', function (Blueprint $table) {
            $table->integer('banco_id')->unsigned();
            $table->integer('servico_id')->unsigned();
            $table->foreign('banco_id')->references('id')->on('bancos');
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
        Schema::dropIfExists('banco_servicos');
    }
}
