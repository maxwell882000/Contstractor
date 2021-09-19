<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\Models\Home\CommentModel;

class FooterController extends ControllerExtendedInput
{
    private const  PATH = "admin_panel.pages.home.comments.";
    public $model = CommentModel::class;
    public $nameInBlade = "footer";
    public $pathToBlade = self::PATH . "footer";
    public $pathStoreImages = "images_store/footer";

}
