<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('text_contact', function (Blueprint $table) {
            $table->id();
            for ($i = 1; $i <= 30; $i++) {
                $table->text("text{$i}")->nullable();
            }
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('text_contact');
    }
};
