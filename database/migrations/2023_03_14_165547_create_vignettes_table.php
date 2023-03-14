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
        Schema::create('vignettes', function (Blueprint $table) {
            $table->id();
            $table->text('entreprise') ;
            $table->text('immatriculation') ;
            $table->text('typeengin') ;
            $table->text('annees') ;
            $table->text('typeimpression') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vignettes');
    }
};
