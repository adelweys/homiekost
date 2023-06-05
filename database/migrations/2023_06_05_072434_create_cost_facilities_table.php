<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_facilities', function (Blueprint $table) {
            $table->unsignedBigInteger('cost_id');
            $table->foreign('cost_id')->references('id')->on('costs');
            $table->enum('car_park', ['yes', 'no']);
            $table->enum('bike_park', ['yes', 'no']);
            $table->enum('wifi', ['yes', 'no']);
            $table->enum('security', ['yes', 'no']);
            $table->enum('electric', ['yes', 'no']);
            $table->enum('pam', ['yes', 'no']);
            $table->enum('bathroom', ['inside', 'outside']);
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
        Schema::dropIfExists('cost_facilities');
    }
};
