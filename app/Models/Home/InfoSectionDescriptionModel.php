<?php

namespace App\Models\Home;

use App\Models\Common\Buttons;
use App\Models\Common\Images;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoSectionDescriptionModel extends ModelWithTranslate
{
    // relationship with button and link info section
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'body^ru',
        'body^uz',
        'body^en',
        "title^ru",
        "title^uz",
        "title^en",

    ];

    public function button()
    {
        return $this->morphOne(Buttons::class, "button");
    }

    public function image(){
        return $this->morphOne(Images::class, "image");
    }

    public function info(){
        return $this->belongsTo(InfoSectionModel::class,"info_section_model_id");
    }
    public function infoSection()
    {
        return $this->belongsTo(InfoSectionModel::class, "info_section_model_id");
    }
}
