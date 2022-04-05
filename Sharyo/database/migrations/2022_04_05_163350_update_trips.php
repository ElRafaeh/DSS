<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('trips', function (Blueprint $table) {
            $table->dropForeign(['vehicle_id']);
            $table->dropColumn(['vehicle_id', 'distance','origin','destination']);
        });

        Schema::table('trips', function($table) {
            $table->string('driver');
            $table->string('origin');
            $table->string('destination');
            $table->foreign('origin')->references('name')->on('cities');
            $table->foreign('destination')->references('name')->on('cities');
            $table->foreign('driver')->references('nif')->on('drivers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {


    }
}
