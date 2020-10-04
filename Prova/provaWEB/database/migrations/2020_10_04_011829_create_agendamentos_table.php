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
            $table->id();
            $table->date('data');
            $table->unsignedBigInteger('pessoa_id');
            $table->unsignedBigInteger('coleta_id');
            $table->timestamps();

            $table->foreign('pessoa_id')->references('id')->on('pessoas');
            $table->foreign('coleta_id')->references('id')->on('coletas');
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
