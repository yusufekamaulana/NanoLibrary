<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusBukuTable extends Migration
{
    public function up()
    {
        Schema::create('status_buku', function (Blueprint $table) {
            $table->increments('ID_Status_Buku');
            $table->string('Status', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_buku');
    }
}
