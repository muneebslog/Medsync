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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('specialization');
            $table->json('days'); // Storing days as a JSON array (e.g., ["Monday", "Wednesday"])
            $table->time('start_time');
            $table->time('end_time');
            $table->boolean('is_on_payroll')->default(false);
            $table->string('payout_frequency'); // e.g., weekly, monthly
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
