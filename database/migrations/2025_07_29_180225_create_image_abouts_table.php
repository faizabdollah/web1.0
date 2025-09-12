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
        Schema::create('image_abouts', function (Blueprint $table) {
            $table->id();
            $table->text('img1')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->text('img4')->nullable();
            $table->text('img5')->nullable();
            $table->text('img6')->nullable();
            $table->text('img7')->nullable();
            $table->text('img8')->nullable();
            $table->text('img9')->nullable();
            $table->text('img10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_abouts');
    }
};
