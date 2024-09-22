<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->increments('ID_Inventory');
            $table->unsignedInteger('Buku_ID_Buku')->nullable();
            $table->unsignedInteger('User_ID_User')->nullable();
            $table->integer('Stock')->nullable();

            $table->foreign('Buku_ID_Buku')
                  ->references('ID_Buku')
                  ->on('buku')
                  ->onDelete('set null');

            $table->foreign('User_ID_User')
                  ->references('ID_User')
                  ->on('user')
                  ->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}

