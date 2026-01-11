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
        Schema::create('Executives', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('officer_id');
            $table->string('executive_role');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->foreign('officer_id')->references('id')->on('Officers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Executives');
    }
};
