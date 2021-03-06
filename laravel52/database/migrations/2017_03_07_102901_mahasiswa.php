<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('mahasiswa', function(Blueprint $table)
    {
        $table->integer('id',10,true,true);
        $table->string('nama',50);
        $table->string('nim',10);
        $table->text('alamat');
        $table->integer('pengguna_id',false,true);
        $table->foreign('pengguna_id')->references('id')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
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
