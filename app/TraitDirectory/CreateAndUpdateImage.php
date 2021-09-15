<?php

namespace App\TraitDirectory;

use App\Models\Common\Buttons;
use App\Models\Common\Images;
use Illuminate\Support\Facades\Storage;

trait CreateAndUpdateImage
{

    public function createImage($request, $type, $id, $pathStoreImages)
    {

        $path = $this->uploadFile($request, $pathStoreImages);
        Images::createNew($path, $type, $id);
    }

    private function uploadFile($request, $path)
    {
        $name = time() . "." . $request->image->extension();
        $request->file("image")->move($path, $name);
        return $path . "/" . $name;
    }

    public function updateImage($request, $model, $pathStoreImages)
    {
        if ($model) {
            $this->deletePath($model);
            $model->image = $this->uploadFile($request, $pathStoreImages);
            $model->save();
        }
    }

    public function deletePath($model)
    {
        Storage::delete($model->image);
        $model->image = "";
        $model->save();
    }

    static public function createNew($image, $type, $id)
    {
        return Images::create(
            [
                "image" => $image,
                "image_type" => $type,
                "image_id" => $id
            ]
        );
    }

}
