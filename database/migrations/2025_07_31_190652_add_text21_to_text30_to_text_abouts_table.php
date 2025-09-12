<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('text_abouts', function (Blueprint $table) {
            for ($i = 21; $i <= 30; $i++) {
                $table->text("text{$i}")->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('text_abouts', function (Blueprint $table) {
            for ($i = 21; $i <= 30; $i++) {
                $table->dropColumn("text{$i}");
            }
        });
    }
};
