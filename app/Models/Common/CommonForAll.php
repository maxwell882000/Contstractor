<?php

namespace App\Models\Common;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonForAll extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
        "google_api_key"
    ];

    public function getKeyAttribute()
    {
        return $this->google_api_key;
    }

}
