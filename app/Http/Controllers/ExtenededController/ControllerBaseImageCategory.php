<?php

namespace App\Http\Controllers\ExtenededController;

use App\TraitDirectory\AttachDetachCategory;

class ControllerBaseImageCategory extends ControllerExtendedListInput
{
    use AttachDetachCategory;

    public const  PATH = "admin_panel.pages.images_category.";

    public $nameInBlade = "images";
    // will be overriden
    public $nameInBladeList = "images";
    public $pathStoreImages = "images_store/category";
    public $pathToBladeInList = self::PATH . "images_show";


    public function modelCreate($request)
    {
        $model = parent::modelCreate($request);
        $this->attachDetach($request, $model);
        return $model;
    }

    public function modelUpdate($request, $id)
    {
        $model = parent::modelUpdate($request, $id);
        $this->attachDetach($request, $model);
        return $model;
    }
}
