<?php

namespace App\Http\Controllers\ExtenededController;

class ControllerBaseCategory extends ControllerExtendedListInput
{
    private const  PATH = "admin_panel.pages.category.";
    public $nameInBlade = "category";
    public $pathToBlade = self::PATH . "category_input";
    public $nameInBladeList = "category_list";
    public $pathStoreImages = "images_store/category";
    public $pathToBladeInList = self::PATH . "category_show";
}
