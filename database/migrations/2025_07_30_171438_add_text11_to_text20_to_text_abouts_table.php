<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('text_abouts', function (Blueprint $table) {
            for ($i = 11; $i <= 20; $i++) {
                $table->text("text{$i}")->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('text_abouts', function (Blueprint $table) {
            for ($i = 11; $i <= 20; $i++) {
                $table->dropColumn("text{$i}");
            }
        });
    }

};
