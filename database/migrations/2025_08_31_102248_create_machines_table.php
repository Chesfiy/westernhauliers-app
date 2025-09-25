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
            $table->string('name')->unique();
            $table->integer('category_id')->index()->nullable();
            $table->integer('category_type_id')->index()->nullable();
            $table->text('description')->nullable();
            $table->integer('model_id')->index()->nullable();
            $table->string('video_url')->nullable();
            $table->string('img_url')->nullable();
            $table->integer('fuel_id')->index()->nullable();
            $table->integer('brand_id')->index()->nullable();
            $table->enum('state', ['new','rented', 'sold', 'available', 'maintenance'])->default('new')->index();
            $table->boolean('is_for_sale')->nullable();
            $table->boolean('is_for_rent')->nullable();
            $table->text('current_location')->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->decimal('rental_price_per_hour', 10, 2)->nullable();
            $table->decimal('rental_price_per_day', 10, 2)->nullable();
            $table->decimal('rental_price_per_week', 10, 2)->nullable();
            $table->decimal('rental_price_per_month', 10, 2)->nullable();
            $table->text('SKU')->nullable();
            $table->text('notes')->nullable();
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
