<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "link",
    ];


    public function image()
    {
        return $this->morphOne(Images::class, 'image');
    }

    public function title()
    {

        return $this->belongsTo(SponsorTitle::class, "sponsor_titles_id");
    }
}
