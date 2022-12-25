<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clienti', function (Blueprint $table) {
            $table->id();
            $table->integer('cod_client');
            $table->string('nume');
            $table->string('prenume');
            $table->string('email');
            $table->string('punct_lucru');
            $table->string('id_societate');
            $table->string('denumire_societate');
            $table->string('cif');
            $table->string('cnp')->nullable(true);
            $table->string('rezidenta');
            $table->string('adresa');
            $table->string('telefon');
            $table->string('grup');
            $table->integer('activ');
            //$table->foreign('id_societate')->references('id')->on('societati')->onUpdate('cascade');
            //$table->foreign('cif')->references('cif')->on('societati')->onUpdate('cascade');
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
        Schema::dropIfExists('clienti');
    }
}
