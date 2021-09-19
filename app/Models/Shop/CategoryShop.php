<?php

namespace App\Models\Shop;

use App\Models\CustomModel\ModelWithTranslate;
use App\Models\Tags\ProductToCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryShop extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "name^ru",
        "name^uz",
        "name^en",

    ];

    public function image(){
        return $this->belongsToMany(ProductToCategory::class,"product_pivots");
    }
}
