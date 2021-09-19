<?php

namespace App\Models\Common\Footer;


use App\Models\Common\IconHtml;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUs extends ModelWithTranslate
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "name^en",
        "name^ru",
        "name^uz",
    ];

    public function iconHtml()
    {
        return $this->morphMany(IconHtml::class, "icon_html");
    }
}
