<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_wisata', function (Blueprint $table) {
            $table->bigIncrements('id') -> array_unique();
            $table->string('nama_wisata',50);
            $table->string('kategori',6);
            $table->date('tanggal');
            $table->string('keterangan');
            $table->string('foto') -> nullable();
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
        Schema::dropIfExists('tb_wisata');
    }
}
