<?php

namespace App\Models\Common\Footer;


use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramFeed extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "name^en",
        "name^ru",
        "name^uz",
    ];

    public function images()
    {
        return $this->hasMany(InstagramImages::class, "instagram_feed_id", "id");
    }


}
