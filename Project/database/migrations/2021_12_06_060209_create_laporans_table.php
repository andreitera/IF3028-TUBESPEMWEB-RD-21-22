<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('Judul')->nullable(false);
            $table->string('Isi-Laporan')->nullable(false);
            $table->string('Lokasi-Kejadian')->nullable(false);
            $table->string('Instansi-Tujuan')->nullable(false);
            $table->string('Kategori-Laporan')->nullable(false);
            $table->date('Tanggal-Kejadian')->nullable(false);
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
        Schema::dropIfExists('laporans');
    }
}
