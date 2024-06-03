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
        Schema::create('traitements', function (Blueprint $table) {
            $table->id();
            $table->string('nom3');
            $table->string('tel2');
            $table->string('email2');
            $table->string('nom_doc1');
            $table->string('tel_doc1');
            $table->string('medecin1');
            $table->date('datecons2');
            $table->string('datecons3');
            $table->string('notes2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traitements');
    }
};
