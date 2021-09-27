<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
//    /**
//     * Run the migrations.
//     *
//     * @return void
//     */
//    public function up()
//    {
////        Schema::create('footers', function (Blueprint $table) {
////            $table->id();
////            $table->text("left_most_text^ru");
////            $table->text("left_most_text^en");
////            $table->text("left_most_text^uz");
////
////            $table->string("keep_in_touch^ru");
////            $table->string("keep_in_touch^uz");
////            $table->string("keep_in_touch^en");
////
////            $table->string("instagram_feed^ru");
////            $table->string("instagram_feed^uz");
////            $table->string("instagram_feed^en");
////
////            $table->string("featured_links^ru");
////            $table->string("featured_links^uz");
////            $table->string("featured_links^en");
////
////
////            $table->string("follow_us^ru");
////            $table->string("follow_us^uz");
////            $table->string("follow_us^en");
////        });
//    }
//
//    /**
//     * Reverse the migrations.
//     *
//     * @return void
//     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
