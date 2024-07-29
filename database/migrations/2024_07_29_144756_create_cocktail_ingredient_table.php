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
        Schema::create('cocktail_ingredient', function (Blueprint $table) {
            $table->foreignId('cocktail_id')->constrained();
            $table->foreignId('ingredient_id')->constrained();
            $table->tinyInteger('percentage');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktail_ingredient');
    }
};
