<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKehilanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_kehilangan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pemohon_id');
            $table->text('barang_hilang');
            $table->dateTime('waktu_kejadian');
            $table->text('lokasi_kejadian');
            $table->bigInteger('created_by');
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
        Schema::dropIfExists('laporan_kehilangan');
    }
}
