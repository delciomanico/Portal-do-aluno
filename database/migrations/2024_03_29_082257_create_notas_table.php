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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mini');
            $table->unsignedBigInteger('id_aluno');
            $table->integer('mac');
            $table->integer('p1');
            $table->integer('p2');
            $table->foreign('id_mini')->references('id')->on('mini_pautas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_aluno')->references('id')->on('alunos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
