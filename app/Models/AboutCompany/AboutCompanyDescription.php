<?php

namespace App\Models\AboutCompany;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompanyDescription extends ModelWithTranslate
{
    public $timestamps = false;

    use HasFactory;


    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",

        "header^ru",
        "header^uz",
        "header^en",

        "body^ru",
        "body^uz",
        "body^en",

        "footer^ru",
        "footer^uz",
        "footer^en",

        "key_word^ru",
        "key_word^uz",
        "key_word^en",
    ];

    public function companyTitle()
    {
        return $this->belongsTo(AboutCompanyDescription::class, "about_company_title_id");
    }
}
