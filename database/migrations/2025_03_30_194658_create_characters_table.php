<?php

use App\Enums\AlignmentEnum;
use App\Enums\HealthTypesEnum;
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
            $table->string('health_type')->default(HealthTypesEnum::Average->value);
            $table->decimal('gold', 12, 3)->default(0);
            $table->string('alignment')->default(AlignmentEnum::NN->value);
            $table->string('race');
            $table->json('ability_scores'); // Rolled without any bonuses
            $table->json('feats');
            $table->json('skill_ranks'); // Only ranks "Acrobatics":2, "Animal Handling":3, "Arcana":4
            $table->timestamps();
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
