<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga')->default(0);
            $table->string('stock');
            $table->string('img');
            $table->string('deskripsi');
            $table->integer('quantity')->default(0);
            $table->integer('total_harga')->default(0);
            $table->timestamps();
        });
    }

   
}
