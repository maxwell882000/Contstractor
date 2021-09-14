<?php

namespace App\Http\CustomController;

use App\Http\Controllers\Controller;

class ControllerWithSpecialView extends Controller
{
    public function viewColor(string $path, $context=[])
    {
        return view($path, $context);
    }

}
