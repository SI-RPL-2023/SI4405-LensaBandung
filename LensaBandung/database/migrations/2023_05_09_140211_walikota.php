<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Walikota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walikota', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jabatan');
            $table->string('kebangsaan');
            $table->string('lahir');
            $table->string('awal_menjabat');
            $table->string('akhir_menjabat');
            $table->string('foto');
            $table->string('tentang');
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
        Schema::dropIfExists('walikota');
    }
}
