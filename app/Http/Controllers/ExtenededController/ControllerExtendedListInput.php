<?php

namespace App\Http\Controllers\ExtenededController;

use App\Http\RequestCustom;

class ControllerExtendedListInput extends ControllerExtendedInput
{
    public $pathToBladeInList;
    public $nameInBladeList;
    public $nameUrlParent;

    public function modelShowList()
    {
        $object = $this->model::all();
        $route = $this->getBasePathes();
        return view($this->pathToBladeInList, [$this->nameInBladeList => $object, "route" => $route]);
    }

    protected function generateUrl($prefix)
    {
        return $this->nameUrlParent . $this->nameInBlade . $prefix;
    }

    public function modelNew(RequestCustom $request, $parent_id = 0)
    {
        $this->modelCreate($request);
        return back();
    }

    public function modelNewView(RequestCustom $requestCustom, int $parent_id = 0)
    {
        $object["path"] = route($this->generateUrl("_create"), strval($parent_id));
        return view($this->pathToBlade, [$this->nameInBlade => $object]);
    }


    public function getBasePathes()
    {
        return [
            "route_add" => $this->generateUrl("_new_show"),
            "route_show" => $this->generateUrl("_show"),
            "route_delete" => $this->generateUrl("_delete"),
        ];
    }

    public function modelShowExisting(RequestCustom $requestCustom, int $id)
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
