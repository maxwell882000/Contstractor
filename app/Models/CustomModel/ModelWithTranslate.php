<?php

namespace App\Models\CustomModel;

use App\TraitDirectory\LanguageCheckTrade;
use Illuminate\Database\Eloquent\Model;

class ModelWithTranslate extends Model
{
    use LanguageCheckTrade;

    public function __get($key)
    {
        if ($this->checkItIsTranslatable($key)) {
            if ($this[$this->translate($key)]) {
                return $this[$this->translate($key)];
            }
            return  $this[$key . "^ru"];
        }
        if($parent = parent::__get($key)){
            return $parent;
        }
        return  "";

    }
}
