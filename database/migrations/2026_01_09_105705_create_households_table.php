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
        Schema::create('Households', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->string('name');
            $table->integer('number_of_members');
            $table->uuid('address_id');
            $table->foreign('address_id')->references('id')->on('Address')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Households');
    }
};
