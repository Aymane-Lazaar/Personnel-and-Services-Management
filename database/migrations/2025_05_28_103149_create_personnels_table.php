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
        // database/migrations/xxxx_create_personnels_table.php
        Schema::create('personnels', function (Blueprint $table) {
            $table->id('NumPersonnel');
            $table->string('Nom');
            $table->decimal('Salaire', 8, 2);
            $table->date('DateEmbauche');
            $table->string('Fonction');
            $table->string('NumService');
            $table->foreign('NumService')->references('NumService')->on('services')->onDelete('cascade');
            $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
