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
        Schema::create('marketings', function (Blueprint $table) {
            $table->id();

            $table->string('marketing_Strategy')->nullable();
            $table->string('content_Calendar')->nullable();
            $table->string('branding_Guidelines')->nullable();
            $table->string('content_Marketing')->nullable();
            $table->string('web_Development_Marketing')->nullable();
            $table->string('social_Media_Management')->nullable();
            $table->string('email_Marketing')->nullable();
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
        Schema::dropIfExists('marketings');
    }
};
