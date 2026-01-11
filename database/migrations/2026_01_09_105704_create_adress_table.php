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
        Schema::create('Address', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->string('street_line1');
            $table->string('appartement_no')->nullable();
            $table->uuid('neighbourhood_id');
            $table->foreign('neighbourhood_id')->references('id')->on('Neighbourhoods')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Address');
    }
};
