<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('phishing_posts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');

            $table->string('type'); // email / link / website

            $table->string('email_from')->nullable();
            $table->string('fake_link')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phishing_posts');
    }
};