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
        Schema::create('MaintenanceFindings', function (Blueprint $table) {
            $table->unsignedBigInteger('MaintenanceTransactionId');
            $table->unsignedBigInteger('FindingId');

            $table->primary(['MaintenanceTransactionId', 'FindingId']);

            $table->foreign('MaintenanceTransactionId')->references('Id')->on('BladderTransactions')->onDelete('cascade');
            $table->foreign('FindingId')->references('Id')->on('Findings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MaintenanceFindings');
    }
};
