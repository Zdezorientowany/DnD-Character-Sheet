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
        Schema::create('sheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character_id')->constrained()->unique();
            $table->string('character_name')->default('');
            $table->string('class')->default('');
            $table->integer('level')->default(1);
            $table->string('subclass')->default('');
            $table->string('race')->default('');
            $table->string('background')->default('');
            $table->string('spelcasting_ability')->nullable()->default(null);
            $table->integer('inspiration_dice')->default(0);
            $table->integer('proficiency_bonus')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sheets');
    }
};
