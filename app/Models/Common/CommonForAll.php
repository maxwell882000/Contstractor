<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonForAll extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function icon()
    {
        return $this->morphOne(Icon::class, "icon");
    }

    public function backImage()
    {
        return $this->morphOne(Images::class, "image");
    }
}
