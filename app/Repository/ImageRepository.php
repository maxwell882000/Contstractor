<?php

namespace App\Repository;

use App\Models\Common\Images;
use Illuminate\Support\Facades\Storage;

class ImageRepository
{
    public $model = Images::class;
    public $key_word = "image";

    public function createImagable($request, $type, $id, $pathStoreImages)
    {
        if ($request->hasFile($this->key_word)) {
            $path = $this->uploadFile($request, $pathStoreImages);
            $this->createNew($path, $type, $id);
        }
        $this->createNew("", $type, $id);
    }

    private function uploadFile($request, $path)
    {
        $name = time() . "." . $request->file($this->key_word)->extension();
        $request->file($this->key_word)->move($path . "/" . $this->key_word , $name);
        return $path . "/" . $this->key_word . "/" . $name;
    }

    public function updateImagable($request, $model, $pathStoreImages)
    {
        if ($request->hasFile($this->key_word)) {
            if ($model) {
                $this->deletePath($model);
                $model[$this->key_word] = $this->uploadFile($request, $pathStoreImages);
                $model->save();
            }
        }
    }

    public function deletePath($model)
    {
        Storage::delete($model[$this->key_word]);
        $model[$this->key_word] = "";
        $model->save();
    }

    public function createNew($image, $type, $id)
    {
        return $this->model::create(
            [
                $this->key_word => $image,
                $this->key_word . "_type" => $type,
                $this->key_word . "_id" => $id
            ]
        );
    }


}
