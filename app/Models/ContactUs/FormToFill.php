<?php

namespace App\Models\ContactUs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormToFill extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $fillable = [
        "firstname",
        "lastname",
        "email",
        "subject",
        "message",
    ];

    public function getNameAttribute():string{
        return $this->firstname . " " . $this->lastname;
    }


}
