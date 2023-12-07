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
        Schema::create('family_leaders', function (Blueprint $table) {
            $table->id();
            $table->string('Leader');
            $table->string('Gender');
            $table->date('Date_Of_Birth');
            $table->string('Phone_Number')->unique();
            $table->string('Living');
            $table->string('Academic_Achievement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_officials');
    }
};
