<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Materias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('claveMat');
            $table->bigInteger('semestres_id')->unsigned();
            $table->foreign('semestres_id')
                    ->references('id')
                    ->on('semestres');
            $table->bigInteger('carreras_id')->unsigned();
            $table->foreign('carreras_id')
            ->references('id')
            ->on('carreras');
            $table->bigInteger('grupos_id')->unsigned();
            $table->foreign('grupos_id')
            ->references('id')
            ->on('grupos');
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
