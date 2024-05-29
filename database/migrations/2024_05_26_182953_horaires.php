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
        Schema::create('horaires', function(Blueprint $table){
            $table->id();
            $table->string('jour');
            $table->string('debut_première')->nullable();
            $table->string('fin_première')->nullable();
            $table->string('debut_deuxième')->nullable();
            $table->string('fin_deuxième')->nullable();
            $table->string('disponible_première');
            $table->string('disponible_deuxième');
            $table->unsignedBigInteger('doctor_id');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horaires');
    }
};
