<?php

namespace App\Models\Common;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends ModelWithTranslate
{
    use HasFactory;


    public $timestamps = false;
    protected $table = "information";
    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
        "action",
        "data"
    ];

    static function address()
    {
        return Information::where("type", "=",0)->first();
    }
    static function email()
    {
        return Information::where("type", "=",1)->first();
    }
    static function phone()
    {
        return Information::where("type", "=",2)->first();
    }
}
