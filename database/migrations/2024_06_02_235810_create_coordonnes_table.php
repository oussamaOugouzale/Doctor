<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coordonnes', function (Blueprint $table) {
            $table->id();
            $table->string('adresse');
            $table->string('ville');
            $table->string('tele_fixe');
            $table->string('tele_mobile');
            $table->string('delegation');
            $table->string('latitude');
            $table->string('longitude');
            $table->boolean('partCompleted');

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
        Schema::DropIfExists('coordonnes');
    }
};
