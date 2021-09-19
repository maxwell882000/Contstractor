<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function MongoDB\BSON\toJSON;

class Style extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "choice_color",
        "main_color",
        "emphasize_color",
        "title_color",
        "secondary_color",
        "intro_section_before_color_home",
        "scroll_up_color"
    ];

    public function choice()
    {
        return $this->convertRGBA($this->choice_color);
    }

    public function main()
    {
        return $this->convertRGBA($this->main_color);
    }

    public function emphasize()
    {
        return $this->convertRGBA($this->emphasize_color);
    }

    public function title()
    {
        return $this->convertRGBA($this->title_color);
    }

    public function secondary()
    {
        return $this->convertRGBA($this->secondary_color);
    }

    public function intro_section()
    {
        return $this->convertRGBA($this->intro_section_before_color_home);
    }

    public function scroll()
    {
        return $this->convertRGBA($this->scroll_up_color);
    }

    public function icon()
    {
        return $this->morphOne(Icon::class, "icon");
    }

    public function preloaderGif()
    {
        return $this->icon->icon;
    }

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function backgroundImage()
    {
        return $this->image->image;
    }

    public function convertRGBA($array)
    {
        $collection = collect(explode(",", $array));
        return $collection->map(function ($item) {
            return floatval($item);
        })->all();
    }
}
