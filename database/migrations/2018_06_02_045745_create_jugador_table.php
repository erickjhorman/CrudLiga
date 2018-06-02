<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador', function (Blueprint $table) {
            $table->increments('id_jugador');
            $table->string('nombre'); 
            $table->integer('edad');  
            $table->char('pocision');
            $table->string('nacionalidad') ->nullable();
            $table->timestamps();

            $table->integer('equipo_id')->unsigned();

            $table->foreign('equipo_id')->references('id')->on('equipo')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugador');
    }
}
