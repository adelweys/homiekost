<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cost_id');
            $table->foreign('cost_id')->references('id')->on('costs');
            $table->integer('roomsize');
            $table->enum('tableset', ['yes', 'no']);
            $table->enum('wardrobe', ['yes', 'no']);
            $table->enum('bed', ['yes', 'no']);
            $table->enum('fan', ['yes', 'no']);
            $table->enum('ac', ['yes', 'no']);
            $table->enum('electric', ['yes', 'no']);
            $table->enum('wifi', ['yes', 'no']);
            $table->enum('pam', ['yes', 'no']);
            $table->integer('price');
            $table->string('photo');
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
        Schema::dropIfExists('rooms');
    }
}
