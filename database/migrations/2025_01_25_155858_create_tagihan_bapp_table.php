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
        Schema::create('tagihan_bapp', function (Blueprint $table) {
            $table->string('nomor_kontrak');
            $table->string('nomor_permohonan_bapp');
            $table->date('tanggal_permohonan_bapp');
            $table->string('nomor_bapp')->primary();
            $table->date('tanggal_bapp');
            $table->string('jumlah_bayar_termin_1_bapp');
            $table->integer('jangka_waktu_pemeliharaan_bapp');
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
        Schema::dropIfExists('tagihan_bapp');
    }
};
