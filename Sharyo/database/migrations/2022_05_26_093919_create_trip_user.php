<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_user', function (Blueprint $table) {
            $table->string('email');
            $table->bigInteger('id')->unsigned();
            $table->primary(['id','email']);
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
            $table->foreign('id')->references('id')->on('trips')->onDelete('cascade');
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
        Schema::dropIfExists('trips_users');
    }
}
