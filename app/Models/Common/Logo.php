<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    public $timestamps= false;
    public function logo220x80 (){
        return $this->morphOne(Icon::class, "icon");
    }
    public function logo150x80(){
        return $this->morphOne(Images::class, "image");
    }
}
