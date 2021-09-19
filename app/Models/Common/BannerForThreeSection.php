<?php

namespace App\Models\Common;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerForThreeSection extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
        "type",
    ];

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }
}
