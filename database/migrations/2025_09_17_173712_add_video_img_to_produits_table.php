<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoImgToProduitsTable extends Migration
{
    public function up()
    {
        Schema::table('produit', function (Blueprint $table) {
            $table->text('video_img')->nullable()->after('video');
        });
    }

    public function down()
    {
        Schema::table('produit', function (Blueprint $table) {
            $table->dropColumn('video_img');
        });
    }
}
