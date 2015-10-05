<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perpus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('perpus', function($table) {
            $table->increments('id');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('tahun');
            $table->string('kota');
            $table->string('deskripsi');
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
        Schema::drop('perpus');
    }
}
