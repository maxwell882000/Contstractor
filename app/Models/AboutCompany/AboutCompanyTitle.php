<?php

namespace App\Models\AboutCompany;

use App\Models\Common\Images;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompanyTitle extends ModelWithTranslate
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
    ];
    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function description()
    {
        return $this->hasMany(AboutCompanyDescription::class, "about_company_title_id");
    }
}
