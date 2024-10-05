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
            $table->string('Kategori', 255);
            $table->integer('Stok')->default(0); // Default to 0
            $table->integer('Dipinjam')->default(0); // Default to 0
            $table->enum('Status', ['Tersedia', 'Dipesan', 'Dipinjam'])->default('Tersedia'); // Default to 'Tersedia'
            $table->enum('Akses', ['Dapat dipinjam', 'Baca di tempat'])->default('Dapat dipinjam'); // Default to 'Dapat dipinjam'
            $table->enum('Ketersediaan', ['Tersedia', 'Tidak Tersedia'])->default('Tersedia'); // Default to 'Tersedia'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
