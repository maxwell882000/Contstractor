<?php

namespace App\Models\ContactUs;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormTitle extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
        "button_name^ru",
        "button_name^uz",
        "button_name^en",
    ];



}
