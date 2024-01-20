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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('objective')->nullable();
            $table->string('target_Audience')->nullable();
            $table->string('budget')->nullable();
            $table->string('channels')->nullable();
            $table->string('creative_Assets')->nullable();
            $table->string('metrics')->nullable();
            $table->string('status')->default('inactive');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
