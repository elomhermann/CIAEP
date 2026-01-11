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
        Schema::create('DepartementMeetings', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('departements_id');
            $table->text('summary');
            $table->dateTime('held_at');
            $table->enum('type', ['rehersal','review','planning','emergency','special','presbytery', 'other']);
            $table->foreign('departements_id')->references('id')->on('ChurchDepartements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DepartementMeetings');
    }
};
