<?php

namespace App\Models\Common\Footer;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeftMostText extends ModelWithTranslate
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        "body^en",
        "body^ru",
        "body^uz",
    ];
}
