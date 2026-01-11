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
        Schema::create('Announcements', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->string('summary');
            $table->uuid('posted_by');
            $table->foreign('posted_by')->references('id')->on('Executives')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Announcements');
    }
};
