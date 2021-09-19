<?php

namespace App\Models\Home;

use App\Models\Common\Buttons;
use App\Models\Common\Images;
use App\Models\CustomModel\ModelWithTranslate;
use App\TraitDirectory\LanguageCheckTrade;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MainBanner extends ModelWithTranslate
{ // establish relationship
    //button
    //image 1920 - 970
    use HasFactory, LanguageCheckTrade;

    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
        "mini_header^ru",
        "mini_header^uz",
        "mini_header^en",
    ];

    public $timestamps = false;


    public function button()
    {
        return $this->morphOne(Buttons::class, "button");
    }

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }


}
