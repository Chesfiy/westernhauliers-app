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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('machine_id');
            $table->string('booking_status')->default('pending');
            $table->string('booking_type')->default('daily');
            $table->date('booking_start_date')->nullable();
            $table->date('booking_end_date')->nullable();
            $table->time('booking_start_time')->nullable();
            $table->time('booking_end_time')->nullable();
            $table->string('booking_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
