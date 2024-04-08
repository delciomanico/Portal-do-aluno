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
        Schema::create('prof_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_prof');
            $table->unsignedBigInteger('id_disc');
            $table->foreign('id_prof')->references('id')->on('professors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_disc')->references('id')->on('disciplinas')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prof_disciplinas');
    }
};
