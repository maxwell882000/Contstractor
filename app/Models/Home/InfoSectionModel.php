<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoSectionModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function description()
    {
        return $this->hasOne(InfoSectionDescriptionModel::class, "info_section_model_id");
    }
}
