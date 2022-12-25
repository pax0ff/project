<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturi', function (Blueprint $table) {
            $table->id();
            $table->integer('nr_document');
            $table->integer('id_client');
            $table->integer('cod_client');
            $table->string('nume_client');
            $table->float('valoare_neta');
            $table->float('tva');
            $table->float('total');
            $table->integer('stare');
            $table->date('data_scadenta');
            $table->integer('stornare');
            $table->string('creata_de');
            $table->string('punct_lucru_client');
            $table->text('observatii');
            //$table->foreign('id_client')->references('id')->on('clienti')->onUpdate('cascade')->onDelete('cascade');
            //$table->foreign('cod_client')->references('cod')->on('clienti')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('facturi');
    }
}
