<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('cost_name', 35)->unique();
            $table->string('slug')->nullable();
            $table->tinyInteger('total_kamar');
            $table->enum('cost_type', ['pria', 'wanita', 'campuran']);
            $table->tinyInteger('available_room');
            $table->enum('cost_location', ['Dr. Mansur', 'Jamin Ginting', 'Setia Budi','Iskandar Muda']);
            $table->text('cost_address');
            $table->text('description');
            $table->string('photo')->nullable();
            $table->string('contact_person', 13);
            $table->string('night_limit', 10);
            $table->integer('harga_bulan')->default(10000);
            $table->double('lat_add', 10, 8)->nullable(); // Kolom 'latitude' dengan presisi 10 digit dan 8 digit di belakang koma
            $table->double('long_add', 11, 8)->nullable(); // Kolom 'longitude' dengan presisi 11 digit dan 8 digit di belakang koma
            $table->enum('status', ['accept', 'reject','waiting']);
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
        Schema::dropIfExists('costs');
    }
}
