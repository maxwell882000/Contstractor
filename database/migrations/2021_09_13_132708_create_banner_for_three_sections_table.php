<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerForThreeSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_for_three_sections', function (Blueprint $table) {
            $table->id();
            $table->string("title^ru");
            $table->string("title^uz");
            $table->string("title^en");
            $table->tinyInteger("type");
            $table->index("type");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner_for_three_sections');
    }
}
