<?php

namespace App\Http\Controllers\Admin\Common\Footer;

use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Models\Common\Footer\FeaturedLinks;
use App\Models\Common\Link;

class FeaturedLinksController extends ControllerExtendedListInputWithTitle
{
    private const  PATH = "admin_panel.pages.common.footer.featured_links.";
    public $nameUrlParent = "admin.footer.";
    public $model = Link::class;
    public $foreign_key = "link";
    public $is_morph = true;
    public $offValidation = true;
    public $modelParent = FeaturedLinks::class;
    public $nameInBlade = "featured_links";
    public $pathToBlade = self::PATH . "featured_links_input";
    public $nameInBladeList = "link_list";
    public $pathToBladeInList = self::PATH . "featured_links_show";
}
