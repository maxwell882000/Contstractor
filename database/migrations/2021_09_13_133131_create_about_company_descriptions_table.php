<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutCompanyDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_company_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string("title^ru");
            $table->string("title^uz");
            $table->string("title^en");
            $table->string("header^ru");
            $table->string("header^uz");
            $table->string("header^en");
            $table->string("body^ru");
            $table->string("body^uz");
            $table->string("body^en");
            $table->string("footer^ru");
            $table->string("footer^uz");
            $table->string("footer^en");
            $table->string("key_word^ru"); /// Figures
            $table->string("key_word^uz");
            $table->string("key_word^en");
            $table->bigInteger("about_company_title_id")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_company_descriptions');
    }
}
