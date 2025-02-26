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
        Schema::create('seed_when_to_sow', function (Blueprint $table) {
            $table->foreignId('seed_id')->constrained()->onDelete('cascade');
            $table->foreignId('when_to_sow_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->primary(['seed_id', 'when_to_sow_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sow', function (Blueprint $table) {
            //
        });
    }
};
