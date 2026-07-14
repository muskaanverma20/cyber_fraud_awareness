<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->id();

            // Alert title
            $table->string('title');

            // Detailed description of fraud alert
            $table->text('description');

            // Fraud type: bank, upi, job etc
            $table->string('type');

            // Risk level: low, medium, high
            $table->enum('risk_level', ['low', 'medium', 'high'])->default('medium');

            // Alert date (custom column)
            $table->date('alert_date')->nullable();

            // Laravel default timestamps (created_at, updated_at)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alerts');
    }
};
