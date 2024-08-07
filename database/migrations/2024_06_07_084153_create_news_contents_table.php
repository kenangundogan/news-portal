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
        Schema::create('news_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news')->onDelete('cascade');
            $table->foreignId('news_content_type_id')->constrained('news_content_types')->onDelete('cascade');
            $table->text('content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_contents');
    }
};
