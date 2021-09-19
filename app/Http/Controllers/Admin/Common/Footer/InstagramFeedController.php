<?php

namespace App\Http\Controllers\Admin\Common\Footer;

use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Models\Common\Footer\InstagramFeed;
use App\Models\Common\Footer\InstagramImages;

class InstagramFeedController extends ControllerExtendedListInputWithTitle
{

    private const  PATH = "admin_panel.pages.common.footer.instagram_feed.";
    public $nameUrlParent = "admin.footer.";
    public $model = InstagramImages::class;
    public $foreign_key = "instagram_feed_id";
    public $is_morph = false;
    public $offValidation = true;
    public $modelParent = InstagramFeed::class;
    public $nameInBlade = "instagram_feed";
    public $pathToBlade = self::PATH . "instagram_feed_input";
    public $nameInBladeList = "instagram_feed_list";
    public $pathToBladeInList = self::PATH . "instagram_feed_show";


}
