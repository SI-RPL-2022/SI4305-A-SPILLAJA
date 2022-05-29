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
        Schema::create('pelaporan_pelecehan_seksuals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_korban');
            $table->string('ttl');
            $table->string('agama');
            $table->string('alamat');
            $table->string('nama_pelaku');
            $table->date('tanggal_kejadian');
            $table->string('judul_laporan');
            $table->string('alamat_kejadian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelaporan_pelecehan_seksuals');
    }
};