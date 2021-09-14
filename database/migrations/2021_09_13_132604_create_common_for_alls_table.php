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
            $table->string("title_at_start^ru");
            $table->string("title_at_start^en");
            $table->string("title_at_start^uz");
            $table->string("google_api_key", 120);
        });

        DB::statement("ALTER TABLE common_for_alls ADD gif_loader MEDIUMBLOB");
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
