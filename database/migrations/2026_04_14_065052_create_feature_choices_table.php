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
        Schema::create('feature_choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character_level_id')->constrained('character_levels')->onDelete('cascade');

            $table->string('choice_type'); // 'feat', 'discovery', 'ability_score_increase'
            $table->string('choice_id'); //link to JSON 
            $table->string('target_specifications')->nullable(); //To what it applies

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_choices');
    }
};
