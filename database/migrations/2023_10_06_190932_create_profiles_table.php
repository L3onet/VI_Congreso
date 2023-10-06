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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string("name", 500)->nullable();
            $table->string("lastname", 500)->nullable();
            $table->string("institution", 500)->nullable();
            $table->string("address", 500)->nullable();
            $table->string("city", 500)->nullable();
            $table->string("country", 500)->nullable();
            $table->foreignId('user_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
