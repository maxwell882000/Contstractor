<?php

namespace App\Models\Home;

use App\Models\Common\Icon;
use App\Models\Common\Images;
use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoSectionModel extends ModelWithTranslate
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "title^ru",
        "title^uz",
        "title^en",
    ];

    static public function create(array $attributes = [])
    {
        $model = static::query()->create($attributes);

        return $model;
    }

    public function getImageDownAttribute()
    {
        return $this->image->image;
    }

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function getListDescAttribute(){
        return $this->description->map(function ($item, $key){
            $item["desc"] = $key == 0 ? "Левая сторана" : "Правая сторана";
            return $item;
        });
    }
    public function leftDescription()
    {
        return $this->description()->first();
    }

    public function rightDescription()
    {
        return $this->description()->skip(1)->first();
    }

    public function description()
    {
        return $this->hasMany(InfoSectionDescriptionModel::class, "info_section_model_id");
    }
}
