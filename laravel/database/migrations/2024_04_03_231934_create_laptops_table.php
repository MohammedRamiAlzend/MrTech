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
            $table->string('type');
            $table->string('ram');
            $table->string('ssd');
            $table->string('processor_type');
            $table->string('processor_speed');
            $table->string('display_size_inch');
            $table->string('display_size_sm');
            $table->string('display_type');
            $table->string('display_resolution');
            $table->string('description');
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
