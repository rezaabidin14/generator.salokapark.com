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
        Schema::create('generete_qr_codes', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 1000)->required()->nullable();
            $table->text('sort_description')->required()->nullable();
            $table->string('id_departemen')->required()->nullable();
            $table->string('departemen')->required()->nullable();
            $table->string('id_sub_departemen')->required()->nullable();
            $table->string('sub_departemen')->required()->nullable();
            $table->text('status')->required()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generete_qr_codes');
    }
};