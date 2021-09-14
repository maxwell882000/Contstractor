<?php

namespace App\Models\AboutCompany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompanyDescription extends Model
{
    public $timestamps = false;

    use HasFactory;

    public function companyTitle()
    {
        return $this->belongsTo(AboutCompanyDescription::class, "about_company_title_id");
    }
}
