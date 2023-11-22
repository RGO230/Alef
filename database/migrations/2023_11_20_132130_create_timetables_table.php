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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lecture_queue'); 
            $table->unsignedBigInteger('curriculum_id'); 
            $table->unsignedBigInteger('lecture_id'); 
            $table->index('curriculum_id');
            $table->foreign('curriculum_id')->references('id')->on('curricula')->onDelete('cascade');
            $table->index('lecture_id');
            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
