<?php

namespace App\Models\AboutCompany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalsTitle extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function personal(){
        return $this->hasMany(PersonalsDescription::class, "personals_titles_id");
    }
}
