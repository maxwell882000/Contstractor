<?php

namespace App\Http\Controllers\ExtenededController;

use App\Http\Controllers\Controller;
use App\Http\RequestCustom;
use App\Models\Common\Buttons;
use App\Models\Common\Images;
use App\Models\Home\MainBanner;
use App\Repository\IconRepository;
use App\Repository\ImageRepository;
use App\TraitDirectory\CreateAndUpdateButton;
use App\TraitDirectory\CreateAndUpdateImage;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

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
    public $pathStoreImages;
    public $imageRepository;
    public $iconRepository;

    public function __construct(ImageRepository $imageRepository, IconRepository $iconRepository)
    {
        $this->imageRepository = $imageRepository;
        $this->iconRepository = $iconRepository;
    }

    public function modelShow()
    {
        if (!($object = $this->model::all()->first()))
            $object = [];
        return view($this->pathToBlade, [$this->nameInBlade => $object]);
    }


    public function modelCreate($request)
    {

        $object = $this->model::create($request->all());
        $this->iconRepository->createImagable($request, $this->model, $object->id, $this->pathStoreImages);
        $this->imageRepository->createImagable($request, $this->model, $object->id, $this->pathStoreImages);

        $this->createButton($request, $this->model, $object->id);
        return $object;
    }

    public function modelUpdate($request, $id)
    {
        $model = $this->model::find($id);
        $model->update($request->all());
        $this->imageRepository->updateImagable($request, $model->image, $this->pathStoreImages);
        $this->iconRepository->updateImagable($request, $model->icon, $this->pathStoreImages);
        $this->updateButton($request);
    }

    public function modelInput(RequestCustom $request)
    {
        $id = 0;
        if ($request->id == null) {
            $object = $this->modelCreate($request);
            $id = $object->id;
        } else {
            $this->modelUpdate($request, $request->id);
            $id = $request->id;
        }
        $url = url()->previous();
        $query = !$request->new_added ? "?" . http_build_query(["new_added" => $id]) : "";
        return redirect()->to($url . $query);
    }


}
