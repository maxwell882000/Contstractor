<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\ExtenededController\AbstractControllers\AbstractStyleController;
use App\Models\Common\Style;


class StylesController extends AbstractStyleController
{
    private const  PATH = "admin_panel.pages.common.";
    private  const PATH_IMAGE = "images_store/style";
    public $model = Style::class;
    public $key_word = "common_icon";
    public $nameInBlade = "styles";
    public $pathImages = self::PATH_IMAGE;
    public $pathStoreImages = self::PATH_IMAGE;
    public $pathToBlade = self::PATH . "styles";

    public function modelCreate($request)
    {
        $object = parent::modelCreate($request);
        $this->createImage($request, $object);
        return $object;
    }

    public function modelUpdate($request, $id)
    {

        $object = parent::modelUpdate($request, $id);
        $this->updateImagable($request, $object);
        return $object;
    }
}
