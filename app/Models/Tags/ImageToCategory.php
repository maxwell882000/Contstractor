<?php

namespace App\Models\Tags;

use App\Models\Common\Images;
use App\Models\Gallery\CategoryGallery;
use App\Models\Shop\ItemShop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageToCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable =[""];


    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function category()
    {
        return $this->belongsToMany(CategoryGallery::class, "imagables");
    }

}
