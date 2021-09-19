<?php

namespace App\Http\Controllers\ExtenededController\AbstractControllers;


use App\Http\Controllers\ExtenededController\ControllerExtendedInput;
use App\TraitDirectory\CreateAndUpdateImage;

class AbstractStyleController extends ControllerExtendedInput
{
    use CreateAndUpdateImage;
}
