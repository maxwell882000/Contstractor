<?php

namespace App\Repository;

use App\Models\Common\Icon;

class IconRepository extends ImageRepository
{
    public $model = Icon::class;
    public $key_word = "icon";

}
