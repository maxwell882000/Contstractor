<?php

namespace App\Models\Common;

use App\Models\CustomModel\ModelWithTranslate;
use App\TraitDirectory\LanguageCheckTrade;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buttons extends ModelWithTranslate
{
    use HasFactory, LanguageCheckTrade;

    public $timestamps = false;
    protected $fillable = [
        "button_type",
        "button_id",
        "link",
        "name^ru",
        "name^uz",
        "name^en"
    ];

}
