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
            $table->foreign('user_id')->references('id')->on('users')->default('1')->nullable();
            $table->string('cost_name', 35)->unique();
            $table->string('slug')->nullable();
            $table->tinyInteger('total_kamar');
            $table->enum('cost_type', ['pria', 'wanita', 'campuran']);
            $table->tinyInteger('available_room');
            $table->enum('cost_location', ['Dr. Mansur', 'Jamin Ginting', 'Setia Budi','Iskandar muda']);
            $table->text('cost_address');
            $table->text('description');
            $table->string('photo');
            $table->string('contact_person', 13);
            $table->string('night_limit', 10);
            $table->text('long_add');
            $table->text('lat_add');
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
