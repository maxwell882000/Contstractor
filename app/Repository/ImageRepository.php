<?php

namespace App\Repository;

use App\Http\Controllers\ExtenededController\AbstractControllers\AbstractStyleController;
use App\Models\Common\Images;
use App\TraitDirectory\CheckMethodExists;
use App\TraitDirectory\CreateAndUpdateImage;
use Illuminate\Support\Facades\Storage;

class ImageRepository extends AbstractImageRepository
{
    use  CheckMethodExists;

    public $model = Images::class;
    public $key_word = "image";
    public $pathImages;

    public function __construct($pathStoreImages)
    {
        $this->pathImages = $pathStoreImages;
    }

    public function createImagable($request, $type, $id)
    {
        if ($request->hasFile($this->key_word)) {
            $path = $this->uploadFile($request, $this->pathImages);
            $this->createNew($path, $type, $id);
        } else if ($this->methodExists($type, $this->key_word)) {
            $this->createNew("", $type, $id);
        }

    }
    protected function createNew($image, $type, $id)
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
