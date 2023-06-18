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
        Schema::create('movie_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->onDelete('restrict')->constrained(
                table: 'movies', indexName: 'movie_id'
            )->required();
            $table->foreignId('cinema_id')->onDelete('restrict')->constrained(
                table: 'cinemas', indexName: 'cinema_id'
            )->required()->unique();
            $table->dateTime('starts')->required();
            $table->dateTime('ends')->required();
            $table->integer('price')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_schedule');
    }
};
