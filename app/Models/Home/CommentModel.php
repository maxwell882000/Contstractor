<?php

namespace App\Models\Home;

use App\Models\Common\Images;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommentModel extends ModelWithTranslate
{

    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'body^ru',
        'body^uz',
        'body^en',
        "name^ru",
        "name^uz",
        "name^en",
        "profession^ru",
        "profession^uz",
        "profession^en"
    ];

    public function avatar()
    {
        return $this->image->image ?? "";
    }

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }
}
