<?php

namespace App\Models\Common;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        ""
    ];

    public function getNameAttribute()
    {
        return $this->button->name;
    }

    public function getLinkAttribute()
    {
        return $this->button->link;
    }

    public function button()
    {
        return $this->morphOne(Buttons::class, "button");
    }


}
