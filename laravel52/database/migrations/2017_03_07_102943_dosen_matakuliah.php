<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DosenMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('dosen_matakuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dosen_id')->unsigned();
            $table->foreign('dosen_id')->references('id')->on('dosen')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('matakuliah_id')->unsigned();
            $table->foreign('matakuliah_id')->references('id')->on('matakuliah')->onUpdate('cascade')->onDelete('cascade');
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
