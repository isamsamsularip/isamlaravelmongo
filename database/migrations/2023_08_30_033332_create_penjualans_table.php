<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kendaraan');
            $table->date('tanggal_penjualan');
            $table->float('harga_penjualan', 10, 2); // 10 total digits, 2 decimal places
            $table->timestamps();

            // Define foreign key relationship
            $table->foreign('id_kendaraan')->references('id')->on('kendaraans');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
