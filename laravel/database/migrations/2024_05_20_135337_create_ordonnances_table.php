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
        Schema::create('ordonnances', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('tel');
            $table->string('email');
            $table->string('nom_doc');
            $table->string('tel_doc');
            $table->string('medecin');
            $table->date('datecons1');
            $table->string('medicament');
            $table->string('posologie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordonnances');
    }
};
