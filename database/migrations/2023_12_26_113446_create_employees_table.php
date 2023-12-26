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

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->string('phone')->nullable();

            $table->string('job_title');
            $table->decimal('salary', 10, 2)->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();

            $table->string('department')->nullable();
            $table->string('employee_status')->default('active');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
