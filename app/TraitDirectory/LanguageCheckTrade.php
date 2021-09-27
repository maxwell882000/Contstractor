<?php

namespace App\TraitDirectory;

use App\Models\Common\Languages;

trait LanguageCheckTrade
{
    public function checkItIsTranslatable($key)
    {
        return $key == "title" ||
            $key == "mini_header" ||
            $key == "name" ||
            $key == "body" ||
            $key == "footer" ||
            $key == "key_word" ||
            $key == "header" ||
            $key == "button_name" ||
            $key == "profession";
    }

    public function translate($key)
    {
        if ($key . "^" . session("locale"))
            return $key . "^" . session("locale");

    }

}
