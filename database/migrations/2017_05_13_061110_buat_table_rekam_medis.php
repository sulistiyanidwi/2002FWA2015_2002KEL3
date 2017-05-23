<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableRekamMedis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekamMedis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ibu',false,true);
            $table->foreign('id_ibu')->references('id')->on('ibu')->onDelete('cascade')->onUpdate('cascade');
            $table->string('tensi_darah');
            $table->string('gula_darah');
            $table->string('kondisi');
            $table->string('kolestrol');
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
        Schema::drop('rekamMedis');
    }
}
