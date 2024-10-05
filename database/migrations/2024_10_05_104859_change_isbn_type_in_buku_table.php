<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeIsbnTypeInBukuTable extends Migration
{
    public function up()
    {
        Schema::table('buku', function (Blueprint $table) {
            $table->string('ISBN', 13)->change(); // Ubah menjadi string dengan panjang 13
        });
    }

    public function down()
    {
        Schema::table('buku', function (Blueprint $table) {
            $table->integer('ISBN')->change(); // Kembalikan ke integer jika perlu
        });
    }
}
