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
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id_program');
            $table->foreignId('id_kategori')->references('id_kategori')->on('kategoris')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('nama_program', 50);
            $table->double('harga');
            $table->text('keterangan');
            $table->string('gambar', 100);
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
        Schema::dropIfExists('programs');
    }
};
