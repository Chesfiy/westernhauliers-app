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
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category_id')->index()->nullable();
            $table->integer('category_type_id')->index()->nullable();
            $table->text('description')->nullable();
            $table->integer('model_id')->index()->nullable();
            $table->string('video_url')->nullable();
            $table->string('img_url')->nullable();
            $table->integer('fuel_id')->index()->nullable();
            $table->integer('brand_id')->index()->nullable();
            $table->enum('state', ['new','rented', 'sold', 'available', 'maintenance'])->default('new')->index();
            $table->boolean('is_for_sale')->default(false)->nullable();
            $table->boolean('is_for_rent')->default(false)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machines');
    }
};
