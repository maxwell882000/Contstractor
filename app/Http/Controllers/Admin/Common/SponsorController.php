<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Models\AboutCompany\AboutCompanyDescription;
use App\Models\AboutCompany\AboutCompanyTitle;
use App\Models\Common\Sponsor;
use App\Models\Common\SponsorTitle;


class SponsorController extends ControllerExtendedListInputWithTitle
{
    private const  PATH = "admin_panel.pages.common.sponsor.";
    public $nameUrlParent = "admin.common.";
    public $model = Sponsor::class;
    public $foreign_key = "sponsor_titles_id";
    public $pathStoreImages ="images_store/sponsors";
    public $is_morph = false;
    public $modelParent = SponsorTitle::class;
    public $nameInBlade = "sponsor";
    public $pathToBlade = self::PATH . "sponsors_input";
    public $nameInBladeList = "company_about_list";
    public $pathToBladeInList = self::PATH . "sponsors_show";

}
