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
            $table->string('title')->unique();
            $table->text('bg-card');
            $table->text('hero-img');
            $table->text('img');
            $table->foreignId('category_id')->constrained(
                table: 'categories',
                indexName: 'posts_category_id'
            );
            $table->text('desc1');
            $table->text('desc2');
            $table->text('desc3');
            $table->text('desc4');
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
