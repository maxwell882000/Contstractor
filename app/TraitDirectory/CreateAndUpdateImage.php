<?php

namespace App\TraitDirectory;

use App\Models\Common\Images;
use Illuminate\Cache\FileStore;
use Illuminate\Support\Facades\Storage;

trait CreateAndUpdateImage
{

    public $key_word = "";
    public $pathImages = "";

    public function createImage($request, $model)
    {
        $attribute = $this->key_word;
        $path = $this->uploadFile($request, $this->pathImages);

        $model->$attribute = $path;
        $model->save();
    }

    protected function uploadFile($request, $path)
    {

        $attribute = $this->key_word;
        $name = time() . "." . $request->$attribute->extension();
        $request->file($attribute)->move($path, $name);
        return $path . "/" . $name;
    }

    public function updateImagable($request, $model)
    {
        if ($request->hasFile($this->key_word)) {
            if ($model) {
                $this->deletePath($model);
                $model[$this->key_word] = $this->uploadFile($request, $this->pathImages);
                $model->save();
            }
        }
    }

    public function deletePath($model)
    {
        try {
            Storage::delete($model[$this->key_word]);
        }
        catch (\Exception $e){
        }

        $model[$this->key_word] = "";
        $model->save();
    }


}
