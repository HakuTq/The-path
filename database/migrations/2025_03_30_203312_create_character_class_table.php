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
        Schema::create('character_class', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character_id')->constrained('characters')->onDelete('cascade');
            $table->string('name'); // e.g., Fighter, Wizard
            $table->integer('level')->unsigned()->default(1);
            $table->integer('hit_die')->unsigned()->default(8); // e.g., 8 for Fighter, 6 for Wizard
            $table->json('racial_traits'); // JSON field for racial traits
            $table->json('class_features'); // JSON field for class features
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_class');
    }
};
