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
        Schema::create('DepartementAnnouncements', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->text('summary');
            $table->uuid('departements_id');
            $table->uuid('posted_by');
            $table->foreign('departements_id')->references('id')->on('ChurchDepartements')->onDelete('cascade');
            $table->foreign('posted_by')->references('id')->on('Members')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DepartementAnnouncements');
    }
};
