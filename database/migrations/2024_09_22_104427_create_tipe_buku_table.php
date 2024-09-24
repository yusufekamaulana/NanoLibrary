<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipeBukuTable extends Migration
{
    public function up()
    {
        Schema::create('tipe_buku', function (Blueprint $table) {
            $table->increments('ID_Tipe_Buku');
            $table->string('Nama_Tipe', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipe_buku');
    }
}
