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
        Schema::create('albunes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_album');
            $table->integer('año_lanzamiento');
            $table->string('discografia');
            $table->foreignId('genero_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albunes');
    }
};
