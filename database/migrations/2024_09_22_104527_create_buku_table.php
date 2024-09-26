<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('ID_Buku');
            $table->string('Judul', 255);
            $table->string('Sampul', 255);
            $table->string('Author', 100)->nullable();
            $table->integer('Tahun')->nullable();
            $table->unsignedInteger('Tipe_Buku_ID_Tipe_Buku')->nullable();
            $table->unsignedInteger('Status_Buku_ID_Status_Buku')->nullable();

            $table->foreign('Tipe_Buku_ID_Tipe_Buku')
                  ->references('ID_Tipe_Buku')
                  ->on('tipe_buku')
                  ->onDelete('set null');

            $table->foreign('Status_Buku_ID_Status_Buku')
                  ->references('ID_Status_Buku')
                  ->on('status_buku')
                  ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
