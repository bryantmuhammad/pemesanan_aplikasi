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
        Schema::create('proses', function (Blueprint $table) {
            $table->bigIncrements('id_proses');
            $table->string('id_pemesanan', 10);
            $table->text('keterangan');
            $table->string('url');
            $table->timestamps();
        });

        Schema::table('proses', function (Blueprint $table) {
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
        Schema::dropIfExists('proses');
    }
};
