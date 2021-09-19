<?php

namespace App\Models\Common;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorTitle extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
    ];
    public function  sponsors(){
        return $this->hasMany(Sponsor::class,"sponsor_titles_id");
    }
}
