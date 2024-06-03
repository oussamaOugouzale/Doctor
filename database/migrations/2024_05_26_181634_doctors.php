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
        Schema::create('doctors', function(Blueprint $table){
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('numero_tel');
            $table->string('email');
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('document')->nullable();
            $table->string('genre')->nullable();
            $table->string('languages')->nullable();
            $table->boolean('partCompleted')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::DropIfExists('doctors');
    }
};
