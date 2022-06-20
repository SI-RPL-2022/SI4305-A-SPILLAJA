<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep__dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter');
            $table->string('nama_pasien');
            $table->string('umur');
            $table->date('tanggal');
            $table->string('nama_obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep__dokters');
    }
};