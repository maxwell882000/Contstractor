<?php

namespace Database\Seeders;

use App\Models\Common\Icon;
use App\Models\Common\Images;
use App\Models\Common\Style;
use Illuminate\Database\Seeder;

class StylesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $style = Style::create();
       Icon::create([
           "icon"=>"../images/icons/preloader.GIF",
           "icon_type"=>Style::class,
           "icon_id"=>$style->id
       ]);

        Images::create([
            "image"=>"../images/background/pattern-one.png",
            "image_type"=>Style::class,
            "image_id"=>$style->id
        ]);

    }
}
