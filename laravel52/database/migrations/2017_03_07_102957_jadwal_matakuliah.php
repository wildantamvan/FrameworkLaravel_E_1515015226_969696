<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JadwalMatakuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('JadwalMataKuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahasiswa_id')->unsigned();
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('ruangan_id')->unsigned();
            $table->foreign('ruangan_id')->references('id')->on('ruangan');
            $table->integer('dosenmatakuliah_id')->unsigned();
            $table->foreign('dosenmatakuliah_id')->references('id')->on('dosen_matakuliah')->onUpdate('cascade')->onDelete('cascade');
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
