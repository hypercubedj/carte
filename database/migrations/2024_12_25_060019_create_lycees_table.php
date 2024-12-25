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
        Schema::create('lycees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('headcount');
            $table->double('lat', 10, 8);
            $table->double('long', 11, 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lycees');
    }
};
