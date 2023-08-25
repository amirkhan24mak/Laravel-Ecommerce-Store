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
        Schema::create('catagery_twos', function (Blueprint $table) {
            $table->id('Subcata_id');
            $table->String('Subcata_Name',35);
            $table->unsignedBigInteger('Mcata_Id');
            $table->foreign('Mcata_Id')->references('Mcata_Id')->on('main_catas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catagery_twos');
    }
};
