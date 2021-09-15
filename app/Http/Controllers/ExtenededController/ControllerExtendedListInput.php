<?php

namespace App\Http\Controllers\ExtenededController;

use App\Http\RequestCustom;

class ControllerExtendedListInput extends ControllerExtendedInput
{
    public $pathToBladeInList;
    public $nameInBladeList;

    public function modelShowList()
    {
        $object = $this->model::all();
        return view($this->pathToBladeInList, [$this->nameInBladeList => $object]);
    }

    public function modelShowExisting(RequestCustom $requestCustom,int $id)
    {
        if ($requestCustom->has("new_added") && $id == 0) {
            $id = $requestCustom->new_added;
        }
        if (!($object = $this->model::find($id))) {
            $object = [];
        }
        return view($this->pathToBlade, [$this->nameInBlade => $object]);
    }


    public function modelDelete($id)
    {

        $this->model::find($id)->delete();
        return redirect()->back();
    }

}
