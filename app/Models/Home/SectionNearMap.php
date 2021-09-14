<?php

namespace App\Models\Home;

use App\Models\Common\Buttons;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionNearMap extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function button()
    {
        return $this->morphOne(Buttons::class, "button");
    }
}
