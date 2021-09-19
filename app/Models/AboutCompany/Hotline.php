<?php

namespace App\Models\AboutCompany;

use App\Models\Common\Icon;
use App\Models\Common\Images;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotline extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "mini_header^ru",
        "mini_header^uz",
        "mini_header^en",

        "body^ru",
        "body^uz",
        "body^en",

        "phone",
    ];

    public function imageLeft()
    {
        return $this->morphOne(Icon::class, "icon");
    }

    public function imageRight()
    {
        return $this->morphOne(Images::class, "image");
    }
}
