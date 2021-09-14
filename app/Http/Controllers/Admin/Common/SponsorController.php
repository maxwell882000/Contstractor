<?php

namespace App\Http\Controllers\Admin\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    private const  PATH = "admin_panel.pages.common.sponsor.";

    public function sponsorShowList()
    {
        return view(self::PATH . "sponsors_show");
    }

    public function sponsorShow()
    {
        return view(self::PATH . "sponsors_input");
    }

    private function sponsorInput()
    {
        return redirect()->back();
    }
}
