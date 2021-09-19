<?php

namespace App\Http\Controllers\ExtenededController;

use App\Models\Common\Information;

// types :
// address - 0
// email   - 1
// phone number - 2
class ControllerInformation extends ControllerExtendedInput
{
    public $type;
    public $model = Information::class;
    public $nameInBlade = "information";
    public $pathToBlade = "admin_panel.pages.information.information";

    public function modelShow()
    {
        if (!($object = $this->model::where("type", "=", $this->type)->first()))
            $object = [];
        return view($this->pathToBlade, [$this->nameInBlade => $object]);
    }
}
