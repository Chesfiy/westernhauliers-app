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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('employee_no')->unique();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('qrcode')->unique();
            $table->string('img_url')->nullable();
            $table->unsignedInteger('machine_id')->nullable()->index();
            $table->string('empolyee_status')->default('pending');
            $table->string('empolyee_type')->default('full_time');
            $table->date('empolyee_start_date')->nullable();
            $table->date('empolyee_end_date')->nullable();
            $table->string('empolyee_remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empolyees');
    }
};
