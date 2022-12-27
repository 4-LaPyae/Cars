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
            $table->foreignId('transmisstion');
            $table->foreignId('equipment_id');
            $table->foreignId('seller_id');
            $table->foreignId('emisstion_id');
            $table->string('fuel_type');
            $table->double('mileage');
            $table->string('registration');
            $table->integer('engine_size');
            $table->integer('power');
            $table->timestamps();
            $table->string('body_type');
            $table->double('price');
            $table->string('colour');
            $table->string('damange');
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
