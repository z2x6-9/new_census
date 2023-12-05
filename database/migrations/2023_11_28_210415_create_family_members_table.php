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
        Schema::create('family_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Leader_id');
            $table->string('Name');
            $table->string('Gender');
            $table->date('Date_Of_Birth');
            $table->string('Academic_Achievement');
            $table->string('Relationship');
            $table->timestamps();
            $table->foreign('Leader_id')->references('id')->on('family_leaders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_members');
    }
};
