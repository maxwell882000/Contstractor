<?php

namespace App\Trade;

use App\Models\Common\Languages;

trait LanguageCheckTrade
{
    public function checkItIsTranslatable($key)
    {
        return $key == "title" || $key == "mini_header" || $key == "name";
    }
    public function translate($key){
        return $key . "^" . Languages::where("is_selected","=",1)->first()->name;
    }

}
