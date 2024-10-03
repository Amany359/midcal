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
        Schema::create('views', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->columnType('VARCHAR')->nullable();
            $table->string('image',100)->columnType('VARCHAR')->nullable();
            $table->string('language',255)->columnType('VARCHAR')->nullable();
            $table->string('create_date',255)->columnType('VARCHAR')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('views');
    }
};
