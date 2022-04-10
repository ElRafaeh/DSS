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
            $table->string('driver')->nullable();
            $table->string('origin')->nullable();
            $table->string('destination')->nullable();
            $table->foreign('origin')->references('name')->on('cities')->onDelete('cascade');
            $table->foreign('destination')->references('name')->on('cities')->onDelete('cascade');
            $table->foreign('driver')->references('nif')->on('drivers')->onDelete('cascade');
            
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
