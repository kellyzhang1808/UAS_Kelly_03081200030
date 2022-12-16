<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTentangpegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tentangpegawais', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Namapegawai')->nullable();
            $table->integer('Usia')->nullable();
            $table->string('Jeniskelamin')->nullable();
            $table->string('Divisi')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tentangpegawais');
    }
}
