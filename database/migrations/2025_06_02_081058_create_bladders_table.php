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
        Schema::create('Bladders', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('BladderCode');
            $table->dateTime('ExpiryDate');
            $table->string('Status');
            $table->boolean('ExpiryNotificationSent')->default(false);
            $table->unsignedBigInteger('BladderSizeId');
            
            $table->foreign('BladderSizeId')->references('Id')->on('BladderSizes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Bladders');
    }
};
