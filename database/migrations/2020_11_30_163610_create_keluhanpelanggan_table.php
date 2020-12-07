<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhanpelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhanpelanggan', function (Blueprint $table) {
            $table->increments('id_keluhan');
            $table->integer('id_transaksi');
            $table->integer('id_pelangggan');
            $table->date('tgl_keluhan');
            $table->timestamps();
            $table->string('isi_keluhan');
            $table->string('tipe_keluhan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keluhanpelanggan');
    }
}
