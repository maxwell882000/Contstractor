<?php

namespace App\Models\Common;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class GoogleMapConf extends ModelWithTranslate
{
    use HasFactory;

    protected $fillable = [
        "lat",
        "lang",
        "hue_color",
        "title^ru",
        "title^uz",
        "title^en",
        "body^ru",
        "body^uz",
        "body^en",

    ];
    public $timestamps = false;
}
