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
        Schema::table('complaints', function (Blueprint $table) {

            // ADD FOREIGN KEY
            $table->foreignId('fraud_report_id')
                  ->nullable()
                  ->after('id')
                  ->constrained('fraud_reports')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('complaints', function (Blueprint $table) {

            // DROP FOREIGN KEY
            $table->dropForeign(['fraud_report_id']);

            // DROP COLUMN
            $table->dropColumn('fraud_report_id');

        });
    }
};