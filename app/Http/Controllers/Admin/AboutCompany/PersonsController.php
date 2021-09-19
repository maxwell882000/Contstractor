<?php

namespace App\Http\Controllers\Admin\AboutCompany;

use App\Http\Controllers\ExtenededController\ControllerExtendedListInputWithTitle;
use App\Models\AboutCompany\PersonalsDescription;
use App\Models\AboutCompany\PersonalsTitle;

class PersonsController extends ControllerExtendedListInputWithTitle
{
    private const  PATH = "admin_panel.pages.about_company.persons.";

    public $nameUrlParent = "admin.about_us.";
    public $model = PersonalsDescription::class;
    public $foreign_key = "personals_title_id";
    public $is_morph = false;
    public $modelParent = PersonalsTitle::class;
    public $nameInBlade = "persons";
    public $pathToBlade = self::PATH . "persons_input";
    public $nameInBladeList = "persons_list";
    public $pathToBladeInList = self::PATH . "persons_show";

}
