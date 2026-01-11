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
        Schema::create('FamilyRelationShips', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('member_id');
            $table->uuid('relative_id');
            $table->enum('relation', ['father','mother','child','spouse','cousin','grandparent','grandchild','aunt','uncle','niece','nephew','other']);
            $table->uuid('household_id');
            $table->foreign('member_id')->references('id')->on('Members')->onDelete('cascade');
            $table->foreign('relative_id')->references('id')->on('Members')->onDelete('cascade');
            $table->foreign('household_id')->references('id')->on('Households')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('FamilyRelationShips');
    }
};
