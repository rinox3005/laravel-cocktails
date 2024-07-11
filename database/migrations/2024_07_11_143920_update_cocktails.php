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
        Schema::table('cocktails', function (Blueprint $table) {
            $table->string('name', 100);
            $table->float('price', 5, 2)->default(0);
            $table->string('img_url', 255)->nullable();
            $table->string('description', 255);
            $table->string('ingredients', 255);
            $table->string('type_of_prep', 30);
            $table->float('serving_temp', 3, 1);
            $table->string('glass_type', 100)->nullable();
            $table->tinyInteger('needs_ice');
            $table->text('preparation')->nullable();
            $table->tinyInteger('is_available');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cocktails', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('price');
            $table->dropColumn('img_url');
            $table->dropColumn('description');
            $table->dropColumn('ingredients');
            $table->dropColumn('type_of_prep');
            $table->dropColumn('serving_temp');
            $table->dropColumn('glass_type');
            $table->dropColumn('needs_ice');
            $table->dropColumn('preparation');
            $table->dropColumn('is_available');
        });
    }
};
