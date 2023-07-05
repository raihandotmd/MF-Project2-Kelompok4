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
        Schema::create('movie_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_schedule')->onDelete('restrict')->constrained(
                table: 'movie_schedule', indexName: 'movie_schedule_id'
            )->required();
            $table->foreignId('user_id')->onDelete('restrict')->constrained(
                table: 'users', indexName: 'user_id'
            )->required();
            $table->string('seat', 3)->required()->unique();
            $table->string('ticket_code', 13)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_order');
    }
};
