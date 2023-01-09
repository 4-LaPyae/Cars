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
        Schema::create('horse_powers', function (Blueprint $table) {
            $table->id();
            $table->string('fromhp_id');
            $table->string('tohp_id');
            $table->string('fromkw_id');
            $table->string('tokw_id');
            $table->foreignId('car_id');
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
        Schema::dropIfExists('horse_powers');
    }
};
