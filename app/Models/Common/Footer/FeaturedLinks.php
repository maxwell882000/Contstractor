<?php

namespace App\Models\Common\Footer;

use App\Models\Common\Link;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedLinks extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "name^en",
        "name^ru",
        "name^uz",
    ];

    public function link()
    {
        return $this->morphMany(Link::class, "link");
    }
}
