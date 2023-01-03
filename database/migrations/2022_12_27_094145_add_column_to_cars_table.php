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
        Schema::table('cars', function (Blueprint $table) {
            $table->foreignId('mileage_id');
           $table->foreignId('powerhp_id');
           $table->foreignId('powerkw_id');
           $table->foreignId('bodytype_id')->nullable();
           $table->foreignId('fueltype_id')->nullable();   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->foreignId('mileage_id');
            $table->dropColumn('powerhp_id');
            $table->dropColumn('powerkw_id');
            $table->dropColumn('bodytype_id');
            $table->dropColumn('fueltype_id');

        });
    }
};
