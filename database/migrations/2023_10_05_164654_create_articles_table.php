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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255)->nullable();
            $table->string("authors", 255)->nullable();
            $table->text("abstract")->nullable();
            $table->string("keywords", 255)->nullable();
            $table->text("introduction")->nullable();
            $table->text("objetives")->nullable();
            $table->text("methodology")->nullable();
            $table->text("result")->nullable();
            $table->text("conclusion")->nullable();
            $table->text("references")->nullable();
            $table->timestamps();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('conference_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
