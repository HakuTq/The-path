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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('name');
            $table->decimal('gold',12,3)->default(0);
            $table->string('alignment'); // enum
            $table->string('race');//taken from a config file
            $table->json('ability_scores');// {"STR":10, "DEX":14, "CON":12, "INT":10, "WIS":8, "CHA":16}
            $table->json('feats');
            $table->json('skills');// {"Acrobatics":2, "Animal Handling":3, "Arcana":4}
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
