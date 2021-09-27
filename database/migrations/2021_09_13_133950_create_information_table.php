<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string("title^ru")->default("");
            $table->string("title^uz")->default("");
            $table->string("title^en")->default("");
            $table->string("icon_data")->default(""); // icon in bootstrap (fa-something)
            $table->string("action")->nullable()->default(""); // what action will be
            $table->string("data")->default(""); // some text email or phone or address
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
        Schema::dropIfExists('information');
    }
}
