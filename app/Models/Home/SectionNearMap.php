<?php

namespace App\Models\Home;

use App\Models\Common\Buttons;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionNearMap extends ModelWithTranslate
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = [
        "title^ru",
        "title^en",
        "title^uz",
        "header^ru",
        "header^en",
        "header^uz",
    ];

    public function button()
    {
        return $this->morphOne(Buttons::class, "button");
    }
}
