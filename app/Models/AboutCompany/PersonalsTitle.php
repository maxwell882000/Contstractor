<?php

namespace App\Models\AboutCompany;

use App\Models\CustomModel\ModelWithTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalsTitle extends ModelWithTranslate
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
        "title^ru",
        "title^uz",
        "title^en",
    ];
    public function personal(){
        return $this->hasMany(PersonalsDescription::class, "personals_title_id");
    }
}
