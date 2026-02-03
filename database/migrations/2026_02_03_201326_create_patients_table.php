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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('mrid')->unique();
            $table->foreignId('family_account_id')
                ->constrained('family_accounts')
                ->cascadeOnDelete();

            $table->string('name');
            $table->unsignedTinyInteger('age');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('relation_to_head');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
