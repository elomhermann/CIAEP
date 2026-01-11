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
        Schema::create('Training', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('departements_id');
            $table->uuid('member_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreign('departements_id')->references('id')->on('ChurchDepartements')->onDelete('cascade');
            $table->foreign('member_id')->references('id')->on('Members')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Training');
    }
};
