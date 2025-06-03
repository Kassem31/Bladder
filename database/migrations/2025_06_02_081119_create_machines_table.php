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
        Schema::create('Machines', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Code');
            $table->boolean('Full')->default(false);
            $table->unsignedBigInteger('LeftBladderId')->nullable();
            $table->unsignedBigInteger('RightBladderId')->nullable();
            
            $table->foreign('LeftBladderId')->references('Id')->on('Bladders')->onDelete('set null');
            $table->foreign('RightBladderId')->references('Id')->on('Bladders')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Machines');
    }
};
