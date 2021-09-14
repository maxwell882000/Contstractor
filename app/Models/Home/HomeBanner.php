<?php

namespace App\Models\Home;

use App\Models\Common\Buttons;
use App\Models\Common\Icon;
use App\Models\Common\Images;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    // icon relationship
    // buttons relationship
    // buttons relationship
    // image relationship
    use HasFactory;
    public $timestamps = false;
    public function icon()
    {
        return $this->morphOne(Icon::class, "icon");
    }

    public function image()
    {
        return $this->morphOne(Images::class, "image");
    }

    public function buttonFirst()
    {
        return $this->button()->first();
    }

    // error pron
    public function buttonSecond()
    {
        return $this->button()->skip(1)->first();
    }

    public function button()
    {
        return $this->morphMany(Buttons::class, "button");
    }
}
