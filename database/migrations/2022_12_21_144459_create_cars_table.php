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
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('transmisstion')->constrained();
            $table->foreignId('equipment_id')->constrained();
            $table->foreignId('seller_id')->constrained();
            $table->foreignId('emisstion_id')->constrained();
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
