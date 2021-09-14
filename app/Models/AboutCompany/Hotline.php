<?php

namespace App\Models\AboutCompany;

use App\Models\Common\Icon;
use App\Models\Common\Images;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotline extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function imageLeft()
    {
        return $this->morphOne(Icon::class, "icon");
    }

    public function imageRight()
    {
        return $this->morphOne(Images::class, "image");
    }
}
