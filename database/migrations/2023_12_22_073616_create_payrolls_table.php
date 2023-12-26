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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();

            $table->string('employee_Information')->nullable();
            $table->string('salary')->nullable();
            $table->string('time_Worked')->nullable();
            $table->string('deductions_And_Benefits')->nullable();
            $table->string('payroll_Schedule')->nullable();
            $table->string('compliance')->nullable();
            $table->string('reporting')->nullable();
            $table->string('payroll_Software')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
