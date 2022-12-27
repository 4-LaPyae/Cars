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
           $table->integer('powerhpfrom_id');
           $table->integer('powerhpto_id');
           $table->integer('powerkwfrom_id');
           $table->integer('powerkwto_id');
           $table->integer('mileagefrom_id');
           $table->integer('mileageto_id');
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
            $table->double('power');
            //
        });
    }
};
