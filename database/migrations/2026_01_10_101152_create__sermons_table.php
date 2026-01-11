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
        Schema::create('Sermons', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->date('date');
            $table->string('url');
            $table->uuid('predicateur_id');
            $table->string('summary');
            $table->uuid('service_id');
            $table->foreign('predicateur_id')->references('id')->on('Members')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('Services')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Sermons');
    }
};
