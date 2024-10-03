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
        Schema::create('subcategories', function (Blueprint $table) {
    $table->id();
    $table->string('name',255)->columnType('VARCHAR')->nullable();
    $table->string('image',100)->columnType('VARCHAR')->nullable();
    $table->longText('description')->nullable();
    $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategories');
    }
};
