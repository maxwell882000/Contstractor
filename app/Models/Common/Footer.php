<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    public function information()
    {

    }

    public function images()
    {
        return $this->morphMany(Images::class, "image");
    }

    public function links()
    {
        return $this->morphMany(Buttons::class, "button");
    }
}
