<?php

namespace App\Models\AboutCompany;

use App\Models\Common\Images;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompanyTitle extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function description()
    {
        return $this->hasMany(AboutCompanyDescription::class, "about_company_title_id");
    }
}
