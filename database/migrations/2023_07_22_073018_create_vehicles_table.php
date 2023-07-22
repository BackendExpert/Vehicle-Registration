<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_plate_no');
            $table->integer('vehicle_chassis_no');
            $table->integer('vehicle_registed_no');
            $table->integer('owner');
            $table->string('vehicle_type');
            $table->string('vehicle_model');
            $table->string('vehicle_color');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
