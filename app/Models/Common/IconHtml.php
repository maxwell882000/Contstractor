<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IconHtml extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "name",
        "link",
    ];
}
