<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonForAllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_for_alls', function (Blueprint $table) {
            $table->id();
            $table->string("title^ru");
            $table->string("title^en");
            $table->string("title^uz");
            $table->string("google_api_key", 500);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('common_for_alls');
    }
}
