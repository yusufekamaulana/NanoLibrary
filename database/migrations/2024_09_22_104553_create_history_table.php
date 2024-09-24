<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->increments('ID_History');
            $table->unsignedInteger('User_ID_User')->nullable();
            $table->unsignedInteger('Buku_ID_Buku')->nullable();
            $table->integer('Total_Dipinjam')->nullable();
            $table->integer('Total_Dikembalikan')->nullable();
            $table->date('Tanggal_Update')->nullable();
            $table->date('Tanggal_Peminjaman')->nullable();
            $table->date('Tanggal_Pengembalian')->nullable();
            $table->date('Tanggal_Reservasi')->nullable();

            $table->foreign('User_ID_User')
                  ->references('ID_User')
                  ->on('user')
                  ->onDelete('set null');

            $table->foreign('Buku_ID_Buku')
                  ->references('ID_Buku')
                  ->on('buku')
                  ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('history');
    }
}

