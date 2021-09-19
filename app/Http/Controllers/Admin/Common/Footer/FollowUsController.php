<?php

namespace App\Http\Controllers\Admin\Common\Footer;

use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Models\Common\Footer\FollowUs;
use App\Models\Common\IconHtml;

class FollowUsController extends ControllerExtendedListInputWithTitle
{
    private const  PATH = "admin_panel.pages.common.footer.follow_us.";
    public $nameUrlParent = "admin.footer.";
    public $model = IconHtml::class;
    public $foreign_key = "icon_html";
    public $is_morph = true;
    public $modelParent = FollowUs::class;
    public $nameInBlade = "follow";
    public $pathToBlade = self::PATH . "follow_us_input";
    public $nameInBladeList = "follow_list";
    public $pathToBladeInList = self::PATH . "follow_us_show";

}
