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
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('none');
            $table->string('price')->default('none');
            $table->string('discount')->default('none');
            $table->string('title')->default('none');
            $table->string('type')->default('none');
            $table->string('ram')->default('none');
            $table->string('ssd')->default('none');
            $table->string('processor_type')->default('none');
            $table->string('processor_speed')->default('none');
            $table->string('display_size_inch')->default('none');
            $table->string('display_size_sm')->default('none');
            $table->string('display_type')->default('none');
            $table->string('display_resolution')->default('none');
            $table->string('description')->default('none');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptops');
    }
};
