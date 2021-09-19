<?php

namespace App\Helper;

use App\TraitDirectory\ToUpper;
use Illuminate\Support\Facades\Route;

class RouteBuilder
{
    use ToUpper;
    public const urlShow = "Show/";
    public $urlInput = self::urlShow;
    public $model;
    public $key_word;

    public function __construct($model, $key_word)
    {
        $this->model = $model;
        $this->key_word = $key_word;
    }
    function show()
    {
        $show = "_show";
        return Route::get("/" . $this->toUpper($this->key_word) . self::urlShow, [$this->model, "modelShow"])
            ->name($this->key_word . $show);
    }


    function input()
    {
        $show = "_input";
        return Route::post("/" . $this->toUpper($this->key_word) . $this->urlInput, [$this->model, "modelInput"])
            ->name($this->key_word . $show);
    }
}
