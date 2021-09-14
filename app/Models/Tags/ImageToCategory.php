<?php

namespace App\Models\Tags;

use App\Models\Gallery\CategoryGallery;
use App\View\Components\Shop\ShopItem;
use App\View\Components\Shop\ShopShow;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageToCategory extends Model
{
    use HasFactory;

    public function gallery(){
        return $this->morphedByMany(CategoryGallery::class,"imagable");
    }

    public function shop(){
        return $this->morphedByMany(ShopShow::class,"imagable");
    }
}
