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
        Schema::create('DepartementTasks', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('assigned_by');
            $table->uuid('assigned_to');
            $table->uuid('departements_id');
            $table->text('details');
            $table->foreign('assigned_by')->references('id')->on('Members')->onDelete('cascade' );
            $table->foreign('assigned_to')->references('id')->on('Members')->onDelete('cascade' );
            $table->foreign('departements_id')->references('id')->on('ChurchDepartements')->onDelete('cascade' );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DepartementTasks');
    }
};
