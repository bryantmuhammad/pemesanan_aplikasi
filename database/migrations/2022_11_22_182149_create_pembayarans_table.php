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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->bigIncrements('id_pemabayaran');
            $table->string('id_pemesanan', 10);
            $table->string('pdf', 100);
            $table->string('va_number', 30);
            $table->timestamps();
        });

        Schema::table('pembayarans', function (Blueprint $table) {
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
