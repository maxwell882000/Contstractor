<?php

namespace App\Http\Controllers\ExtenededController;

use App\Http\Controllers\Controller;
use App\Http\RequestCustom;
use App\Repository\IconRepository;
use App\Repository\ImageRepository;
use App\TraitDirectory\CreateAndUpdateButton;

class ControllerExtendedInput extends Controller
{
    use CreateAndUpdateButton;

    // id types
    // -1 new or edit
    // 0 create new
    // ~ editing
    public $model;
    public $nameInBlade;
    public $pathToBlade;
    public $pathStoreImages = "images_store/all";
    public $offValidation = false;
    public $imageRepository;
    public $iconRepository;


    public function __construct()
    {
        $this->imageRepository = new ImageRepository($this->pathStoreImages);
        $this->iconRepository = new IconRepository($this->pathStoreImages);
    }

    public function modelShow()
    {
        if (!($object = $this->model::all()->first()))
            $object = [];
        return view($this->pathToBlade, [$this->nameInBlade => $object]);
    }


    public function modelCreate($request)
    {

        $this->validation($request);
        $object = $this->model::create($request->all());
        $this->iconRepository->createImagable($request, $this->model, $object->id, $this->pathStoreImages);
        $this->imageRepository->createImagable($request, $this->model, $object->id, $this->pathStoreImages);
        $this->createButton($request, $this->model, $object->id);

        return $object;
    }

    public function modelUpdate($request, $id)
    {
        $this->validation($request);
        $model = $this->model::find($id);
        $model->update($request->all());
        $this->imageRepository->updateImagable($request, $model->image, $this->pathStoreImages);
        $this->iconRepository->updateImagable($request, $model->icon, $this->pathStoreImages);
        $this->updateButton($request);
        return $model;
    }

    public function validation($request)
    {

        if (!$this->offValidation) {
            $fillable = (new $this->model)->getFillable();
            $validation = [];
            foreach ($fillable as $item) {
                $validation[$item] = "required";
            }
            $request->validate($validation);
        }
    }



    public function modelInput(RequestCustom $request)
    {

        if ($request->id == null || $request->id == "0") {
            $object = $this->modelCreate($request);
            $id = $object->id;
        } else {
            $this->modelUpdate($request, $request->id);
            $id = $request->id;
        }
        return back();
    }


}
