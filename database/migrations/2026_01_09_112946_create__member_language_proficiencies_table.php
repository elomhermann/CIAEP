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
        Schema::create('MemberLanguageProficiencies', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->uuid('member_id');
            $table->uuid('language_id');
            $table->string('language_type');
            $table->string('fluency_level');
            $table->foreign('member_id')->references('id')->on('Members')->onDelete('cascade');
            $table->foreign('language_id')->references('id')->on('Languages')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MemberLanguageProficiencies');
    }
};
