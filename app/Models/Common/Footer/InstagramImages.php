<?php

namespace App\Models\Common\Footer;

use App\Models\Common\Icon;
use App\Models\Common\Images;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstagramImages extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "instagram_images";
    protected $fillable = [
        "",
    ];

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function preview(){
        return $this->icon->icon;
    }

    public function icon()
    {
        return $this->morphOne(Icon::class, "icon");
    }
}
