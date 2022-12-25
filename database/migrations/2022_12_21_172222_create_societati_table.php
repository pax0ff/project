<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocietatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societati', function (Blueprint $table) {
            $table->id();
            $table->string('denumire');
            $table->text('adresa');
            $table->string('email');
            $table->string('cif');
            $table->string('administrator');
            $table->integer('activ');
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
        Schema::dropIfExists('societati');
    }
}
