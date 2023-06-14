<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id('id_tenant');
            $table->foreignId('id_cost')->constrained('costs');
            $table->string('name');
            $table->string('username', 25);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone_no')->unique()->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->string('photo')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('tenants');
    }
}
