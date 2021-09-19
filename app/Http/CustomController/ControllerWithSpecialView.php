<?php

namespace App\Http\CustomController;

use App\Http\Controllers\Controller;
use App\Models\Common\CommonForAll;

class ControllerWithSpecialView extends Controller
{
    public function viewColor(string $path, $context = [])
    {
        $common = CommonForAll::all()->first();
        $context["key"] = $common->key ?? "";
        $context["title"] = $common->title ?? "";
        return view($path, $context);
    }

}
