<?php

namespace App\Http\Controllers;

use App\Http\RequestCustom;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {

        if (in_array($lang, ["en", "ru", "uz"])) {
            session(['locale' => $lang]);
        }

        return redirect()->to("/");
    }
}
