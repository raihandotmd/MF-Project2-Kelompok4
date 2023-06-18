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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->required();
            $table->text('description', 255);
            $table->foreignId('genre_id')->onDelete('restrict')->constrained(
                table: 'movie_genre', indexName: 'movie_genre_id'
            )->required();
            $table->string('image', 25)->required();
            $table->string('trailer', 25)->required();
            $table->string('duration',10)->required();
            $table->date('release_date')->required();
            $table->string('director', 25)->required();
            $table->string('cast', 25)->required();
            $table->string('country', 25)->required();
            $table->string('language', 25)->required();
            $table->string('age_limit', 25)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
