<?php

namespace App\Models\Shop;

use App\Models\Tags\ImageToCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemShop extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo(ImageToCategory::class, "image_to_category_id");
    }
}
