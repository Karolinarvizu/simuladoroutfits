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
        Schema::create('outfits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pant_id')->constrained('pants')->onDelete('cascade');
            $table->foreignId('shirt_id')->constrained('shirts')->onDelete('cascade');
            $table->foreignId('accessory_id')->nullable()->constrained('accessories')->onDelete('cascade');
            $table->foreignId('shoe_id')->constrained('shoes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outfits');
    }
};
