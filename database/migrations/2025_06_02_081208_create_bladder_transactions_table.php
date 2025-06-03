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
        Schema::create('BladderTransactions', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('TransactionType');
            $table->unsignedBigInteger('BladderId');
            $table->unsignedBigInteger('MachineId')->nullable();
            $table->string('Discriminator');
            $table->boolean('ChangedCopperElement')->default(false);
            $table->boolean('ChangedMainMandrillSeal')->default(false);
            $table->boolean('ChangedPiping')->default(false);
            $table->boolean('ChangedRotaryJoint')->default(false);
            $table->boolean('ChangedShoulderSeal')->default(false);
            $table->string('CreatedAt');
            
            $table->foreign('BladderId')->references('Id')->on('Bladders')->onDelete('cascade');
            $table->foreign('MachineId')->references('Id')->on('Machines')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('BladderTransactions');
    }
};
