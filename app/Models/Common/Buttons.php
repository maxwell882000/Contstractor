<?php

namespace App\Models\Common;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buttons extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        "button_type",
        "button_id",
        "link",
        "name^ru",
        "name^uz",
        "name^en"
    ];

    public function __get($key)
    {
        if ($this->checkItIsTranslatable($key)) {
            return $this[$this->translate($key)];
        }
        return parent::__get($key);
    }
}
