<?php

namespace App\Models\Gallery;

use App\Models\Tags\ImageToCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGallery extends Model
{
    use HasFactory;
    public function image(){
        return $this->morphToMany(ImageToCategory::class,"imagable");
    }
}
