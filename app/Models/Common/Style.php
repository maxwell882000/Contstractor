<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function preloaderGif()
    {
        return $this->morphOne(Icon::class, "icon");
    }

    public function backgroundImage()
    {
        return $this->morphOne(Images::class, "image");
    }
}
