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
        Schema::create('Officers', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('member_id');
            $table->string('officer_role');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->foreign('member_id')->references('id')->on('Members')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Officers');
    }
};
