<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id('AGE_CODIGO');
            $table->dateTime('AGE_DATAIN');
            $table->dateTime('AGE_DATAFI');
            $table->Boolean('AGE_DISPONIVEL');
            $table->unsignedBigInteger('AGE_USE_CODIGO')->unsigned()->nullable();
            $table->foreign('AGE_USE_CODIGO')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('AGE_PRO_CODIGO')->unsigned()->nullable();
            $table->foreign('AGE_PRO_CODIGO')->references('id')->on('procedimentos')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('agendamentos');
    }
}
