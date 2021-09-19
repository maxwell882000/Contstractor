<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        ""
    ];

    public function icon()
    {
        return $this->morphOne(Icon::class, "icon");
    }

    public function logo220x80()
    {
        return $this->icon->icon;
    }

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function logo150x80()
    {
        return $this->image->image;
    }
}
