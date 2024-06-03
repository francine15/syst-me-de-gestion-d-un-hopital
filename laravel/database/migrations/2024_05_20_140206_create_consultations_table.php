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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('nom4');
            $table->string('tel4');
            $table->string('email4');
            $table->string('nom_doc2');
            $table->string('tel_doc2');
            $table->string('medecin2');
            $table->date('datecons4');
            $table->string('symptome');
            $table->string('notes3');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
