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

            $table->string('title');
            $table->text('description');

            // type: bank, upi, job etc
            $table->string('type');

            // risk level
            $table->enum('risk_level', ['low', 'medium', 'high'])->default('medium');

            $table->date('alert_date');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alerts');
    }
};