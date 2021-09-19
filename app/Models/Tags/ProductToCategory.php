<?php

namespace App\Models\Tags;

use App\Models\Common\Images;
use App\Models\CustomModel\ModelWithTranslate;
use App\Models\Shop\CategoryShop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductToCategory extends ModelWithTranslate
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable =[
        "name^ru",
        "name^en",
        "name^uz",
        "price",
        "currency",
    ];

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function category()
    {
        return $this->belongsToMany(CategoryShop::class, "product_pivots");
    }
}
