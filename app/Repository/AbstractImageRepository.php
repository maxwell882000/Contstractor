<?php

namespace App\Repository;

use App\TraitDirectory\CreateAndUpdateImage;

abstract class AbstractImageRepository
{
    use CreateAndUpdateImage;

    abstract public function createImagable($request, $type, $id);
    abstract protected function createNew($image, $type, $id);
}
