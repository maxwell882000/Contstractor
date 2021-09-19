<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
//     {{--<img src="data:image/jpeg;base64,'.base64_encode( $item->image  ).'"/>;--}}
    protected $table = "images_admin";
    public $timestamps = false;
    protected $fillable = [
        "image",
        "image_type",
        "image_id"
    ];
    use HasFactory;


}
