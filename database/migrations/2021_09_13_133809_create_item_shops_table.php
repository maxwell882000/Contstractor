<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('item_shops', function (Blueprint $table) {
//            $table->id();
//            $table->string("name^ru");
//            $table->string("name^uz");
//            $table->string("name^en");
//            $table->string("price");
//            $table->string("currency");
//            $table->string("image_to_category_id");
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_shops');
    }
}
