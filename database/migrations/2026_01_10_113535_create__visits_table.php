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
        Schema::create('Visits', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('member_visited');
            $table->uuid('organised_by');
            $table->dateTime('day');
            $table->string('outcome');
            $table->foreign('member_visited')->references('id')->on('Members')->onDelete('cascade');
            $table->foreign('organised_by')->references('id')->on('Officers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Visits');
    }
};
