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
        Schema::create('complaints', function (Blueprint $table) {

            $table->id();

            $table->string('complaint_id')->unique();

            $table->string('name');

            $table->string('mobile');

            $table->string('email')->nullable();

            $table->text('complaint');

            $table->enum('status', [
                'Complaint Registered',
                'Under Investigation',
                'Action Taken'
            ])->default('Complaint Registered');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};