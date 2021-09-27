<?php

namespace App\InterfaceToFron;

use App\Models\Common\CommonForAll;
use App\Models\Common\Footer\FollowUs;
use App\Models\Common\GoogleMapConf;

class SocialLinks
{
    public $name_of_icon;
    public $link;

    public function __construct($name_of_icon, $link)
    {
        $this->name_of_icon = $name_of_icon;
        $this->link = $link;
    }
}

class Logo
{
    public $logo_220_80;
    public $logo_150_80;

    public function __construct($logo_220_80, $logo_150_80)
    {
        $this->logo_150_80 = $logo_150_80;
        $this->logo_220_80 = $logo_220_80;
    }
}

class  ItemCategory
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
}

class MapModel
{
    public $lat;
    public $lang;
    public $zoom;
    public $type;
    public $hue_color;
    public $title;
    public $content;
    public $API_key;

    public function __construct($title, $content, $hue_color, $lang, $lat,
                                $type, $zoom)
    {
        $this->lang = $lang;
        $this->title = $title;
        $this->content = $content;
        $this->hue_color = $hue_color;
        $this->lat = $lat;
        $this->type = $type;
        $this->zoom = $zoom;
    }

}

trait InterfaceToFront
{
    public function getSocialLinks()
    {
        if ($follow = FollowUs::all()->first()) {
            return $follow->iconHtml->map(function ($item) {
                return new SocialLinks($item->name, $item->link);
            });
        }
        return collect([]);
    }

    public function getLogo()
    {
        $logo = \App\Models\Common\Logo::all()->first();
        if ($logo)
            return new Logo($logo->logo220x80(), $logo->logo150x80());
        return new Logo("", "");
    }

    public function getMap()
    {

        if ($key = CommonForAll::all()->first())
            return $key->key;

        return "";
    }

    public function getCategory($categories, &$array = [])
    {

        return $categories->map(function ($cat) use (&$array) {
            $item = new ItemCategory($cat->name ?? "");
            $array[$cat->id] = $item;
            return $item;
        });
    }
}
