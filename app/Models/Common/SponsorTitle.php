<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorTitle extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function  sponsors(){
        return $this->hasMany(Sponsor::class,"sponsor_titles_id");
    }
}
