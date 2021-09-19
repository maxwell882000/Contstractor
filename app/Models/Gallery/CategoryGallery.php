<?php

namespace App\Models\Gallery;

use App\Models\CustomModel\ModelWithTranslate;
use App\Models\Tags\ImageToCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CategoryGallery extends ModelWithTranslate
{
    use HasFactory;


    public $timestamps = false;

    protected $fillable = [
        "name^ru",
        "name^uz",
        "name^en",
    ];

    public function image(){
        return $this->belongsToMany(ImageToCategory::class,"imagables");
    }
}
