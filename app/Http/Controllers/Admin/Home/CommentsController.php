<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\ExtenededController\ControllerExtendedListInput;
use App\Models\Home\CommentModel;

class CommentsController extends ControllerExtendedListInput
{
    private const  PATH = "admin_panel.pages.home.comments.";
    public $model = CommentModel::class;
    public $nameUrlParent = "admin.home.";
    public $nameInBlade = "comments";
    public $pathToBlade = self::PATH . "comments_input";
    public $nameInBladeList = "comment_list";
    public $pathStoreImages = "images_store/comments";
    public $pathToBladeInList = self::PATH . "comments_show";

}
