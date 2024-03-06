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
        Schema::create('business_posts', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->unsignedBigInteger('category_id')->comment('this Id is come from Categories Table');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('short_content');
            $table->text('long_content');
            $table->string('author_name');
            $table->string('image');
            $table->string('image1');
            $table->timestamp('date');
            $table->boolean('status');
            $table->string('slug_url')->unique();
            $table->string('meta_title');
            $table->string('meta_desc')->comment('meta description');
            $table->string('meta_key')->comment('meta keyword');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_posts');
    }
};
