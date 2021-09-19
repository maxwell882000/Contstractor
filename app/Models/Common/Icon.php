<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "icon",
        "icon_type",
        "icon_id"
    ];


}
