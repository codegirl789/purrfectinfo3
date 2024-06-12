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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('super_category_id')->references('id')->on('super_categories');
            $table->foreignId('sub_category_id')->references('id')->on('sub_categories');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('status_id')->references('id')->on('statuses');
            $table->string('title')->unique();
            $table->text('introduction');
            $table->text('content');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
