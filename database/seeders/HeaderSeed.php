<?php

namespace Database\Seeders;

use App\Models\Common\Buttons;
use App\Models\Common\Header;
use Illuminate\Database\Seeder;

class HeaderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [
            ["/", "Главный"],
            ["shop", "Магазин"],
            ["about-us", "О нас"],
            ["gallery", "Галлерея"],
            ["contact-us", "Связаться с нами"]
        ];
        foreach ($links as $link) {
            $header = Header::create();
            Buttons::create(["link" => $link[0], "name^ru" => $link[1],
                "button_type" => Header::class, "button_id" => $header->id]);
        }
    }
}
