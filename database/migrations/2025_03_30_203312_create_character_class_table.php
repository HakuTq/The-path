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

            $table->foreignUuid('character_id')->constrained('characters')->onDelete('cascade');

            $table->integer('level');
            $table->string('class_id'); // Links to classes.json
            $table->integer('class_level');

            $table->integer('hp_gained');
            $table->string('favored_class_bonus')->nullable(); // 'hp', 'skill', 'alternate' or null

            $table->timestamps();

            $table->unique(['character_id', 'level']);
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
