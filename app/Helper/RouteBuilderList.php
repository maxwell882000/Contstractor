<?php

namespace App\Helper;

use Illuminate\Support\Facades\Route;


class  RouteBuilderList extends RouteBuilder
{
    static $urlShowList = "ShowList";
    static $urlListCreate = "ListCreate/{id}";
    public const urlShow = "Show/{id}";
    static $urlDelete = "Delete/{id}";
    public $urlInput = self::urlShow;


    function showList()
    {
        $show = "_show_list";
        return Route::get("/" . $this->toUpper($this->key_word) . self::$urlShowList, [$this->model, "modelShowList"])
            ->name($this->key_word . $show);
    }

    function titleInput()
    {
        $show = "_show_list_input";
        return Route::post("/" . $this->toUpper($this->key_word) . self::$urlShowList, [$this->model, "modelTitleInput"])
            ->name($this->key_word . $show);
    }

    function newShow()
    {
        $show = "_new_show";
        return Route::get("/" . $this->toUpper($this->key_word) . self::$urlListCreate, [$this->model, "modelNewView"])
            ->name($this->key_word . $show);
    }

    function newCreate()
    {
        $show = "_create";
        return Route::post("/" . $this->toUpper($this->key_word) . self::$urlListCreate, [$this->model, "modelNew"])
            ->name($this->key_word . $show);
    }


    function show()
    {
        $show = "_show";
        return Route::get("/" . $this->toUpper($this->key_word) . self::urlShow, [$this->model, "modelShowExisting"])
            ->name($this->key_word . $show);
    }



    function delete()
    {
        $show = "_delete";
        return Route::get("/" . $this->toUpper($this->key_word) . self::$urlDelete, [$this->model, "modelDelete"])
            ->name($this->key_word . $show);
    }
}



//class  RouteBuilder
//{
//    static $urlShowList = "ShowList";
//    static $urlLinkCreate = "LinkCreate/{parent_id}";
//    static $urlShow = "Show/{id}";
//    static $urlDelete= "Delete/{id}";
//
//    static function showList($model, $key_word)
//    {
//        $show = "_show_list";
//        return Route::get("/" . toUpper($key_word) . self::$urlShowList, [$model, "modelShowList"])
//            ->name($key_word . $show);
//    }
//
//    static function titleInput($model, $key_word)
//    {
//        $show = "_show_list_input";
//        return Route::post("/" . toUpper($key_word) . self::$urlShowList, [$model, "modelTitleInput"])
//            ->name($key_word . $show);
//    }
//
//    static function newShow($model, $key_word)
//    {
//        $show = "_new_show";
//        return Route::get("/" . toUpper($key_word) . self::$urlLinkCreate, [$model, "modelNewView"])
//            ->name($key_word . $show);
//    }
//
//    static function newCreate($model, $key_word)
//    {
//        $show = "_create";
//        return Route::post("/" . toUpper($key_word) . self::$urlLinkCreate, [$model, "modelNew"])
//            ->name($key_word . $show);
//    }
//
//
//    static function show($model, $key_word)
//    {
//        $show = "_show";
//        return Route::get("/" . toUpper($key_word) . self::$urlShow, [$model, "modelShowExisting"])
//            ->name($key_word . $show);
//    }
//    static function input($model, $key_word)
//    {
//        $show = "_input";
//        return Route::post("/" . toUpper($key_word) . self::$urlShow, [$model, "modelInput"])
//            ->name($key_word . $show);
//    }
//    static function delete($model, $key_word)
//    {
//        $show = "_delete";
//        return Route::get("/" . toUpper($key_word) . self::$urlDelete, [$model, "modelDelete"])
//            ->name($key_word . $show);
//    }
//}
//


