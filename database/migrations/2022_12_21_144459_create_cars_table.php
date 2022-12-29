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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('brand_id');
            $table->foreignId('country_id');
            $table->foreignId('transmisstion_id');
            $table->foreignId('equipment_id');
            $table->foreignId('seller_id');
            $table->foreignId('emisstion_id');
            $table->string('registration_id');
            $table->integer('engine_id');
            $table->timestamps();
            $table->double('price_id');
            $table->string('colour_id');
            $table->string('damage_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
