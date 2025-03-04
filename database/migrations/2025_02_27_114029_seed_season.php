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
        Schema::create('seed_season', function (Blueprint $table) {
            $table->foreignId('seed_id')->constrained()->onDelete('cascade');
            $table->foreignId('season_id')->constrained()->onDelete('cascade');
            $table->string('action');
            $table->timestamps();
            $table->unique(['seed_id', 'season_id', 'action']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
