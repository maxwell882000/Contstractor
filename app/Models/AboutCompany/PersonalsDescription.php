<?php

namespace App\Models\AboutCompany;

use App\Models\Common\Images;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class PersonalsDescription extends Model
{//each third person has to have image of 370x320 usual 385x290
    use HasFactory;

    public function image():MorphOne
    {
        return $this->morphOne(Images::class, "image");
    }
}
