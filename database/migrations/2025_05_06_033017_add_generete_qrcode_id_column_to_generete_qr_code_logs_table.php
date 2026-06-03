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
        Schema::table('generete_qr_code_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('generete_qrcode_id')->required()->after('note_log');
            $table->foreign('generete_qrcode_id')->references('id')->on('generete_qr_codes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('generete_qr_code_logs', function (Blueprint $table) {
            $table->dropForeign(['generete_qrcode_id']);
            $table->dropColumn('generete_qrcode_id');
        });
    }
};
