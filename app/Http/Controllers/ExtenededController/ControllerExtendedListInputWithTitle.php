<?php

namespace App\Http\Controllers\ExtenededController;

use App\Http\RequestCustom;


class ControllerExtendedListInputWithTitle extends ControllerExtendedListInput
{
    public $modelParent;
    public $foreign_key;

    public $is_morph = false;


    public function modelShowList()
    {

        $title = $this->modelParent::all()->first();
        $routes = $this->getBasePathes();

        return view($this->pathToBladeInList, [$this->nameInBlade => $title, "route" => $routes]);
    }

    public function getBasePathes()
    {
        return [
            "route_show" => $this->generateUrl("_show"),
            "route_delete" => $this->generateUrl("_delete"),
            "route_submit_text" => $this->generateUrl("_show_list_input"),
            "route_to_add_list" => $this->generateUrl("_new_show"),
        ];
    }

    public function modelTitleInput(RequestCustom $requestCustom)
    {
        $tempStoreModel = $this->model;
        $this->model = $this->modelParent;
        $model = $this->modelInput($requestCustom);
        $this->model = $tempStoreModel;
        return $model;
    }


    public function modelNewView(RequestCustom $requestCustom, int $parent_id = 0)
    {

        $object["path"] = route($this->generateUrl("_create"), strval($parent_id));
        return view($this->pathToBlade, [$this->nameInBlade => $object]);
    }

    public function modelNew(RequestCustom $request, $parent_id = 0)
    {

        $object = $this->modelCreate($request);
        $this->connectEloquent($object, $parent_id);
        return back();
    }

    private function connectEloquent($object, $parent_id)
    {
        if ($this->is_morph) {
            $object[$this->foreign_key . "_type"] = $this->modelParent;
            $object[$this->foreign_key . "_id"] = $parent_id;
        } else {
            $object[$this->foreign_key] = $parent_id;
        }
        $object->save();
    }


}
