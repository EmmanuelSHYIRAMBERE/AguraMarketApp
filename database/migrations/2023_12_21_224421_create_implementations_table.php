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
        Schema::create('implementations', function (Blueprint $table) {
            $table->id();

            $table->string('project_Plans')->nullable();
            $table->string('timelines')->nullable();
            $table->string('team_Responsibilities')->nullable();
            $table->string('technology_Stack')->nullable();
            $table->string('quality_Assurance')->nullable();
            $table->string('milestones')->nullable();
            $table->string('client_Communication')->nullable();
            $table->string('influencer_Partnerships')->nullable();
            $table->string('customer_Feedback')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('implementations');
    }
};
