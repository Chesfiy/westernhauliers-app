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
        Schema::create('machine_models', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('type')->nullable();
            $table->double('width')->nullable();
            $table->double('raised_height')->nullable();
            $table->double('height')->nullable();
            $table->double('capacity')->nullable();
            $table->double('lift_working')->nullable();
            $table->integer('fuel_id')->index()->nullable();
            $table->float('unit')->nullable();
            $table->integer(column: 'max_container')->nullable();
            $table->integer('wheel_base')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machine_models');
    }
};
