<?php

namespace App\Http\Controllers;

use App\Http\CustomController\ControllerWithSpecialView;
use Illuminate\Http\Request;

class GetWebSite extends ControllerWithSpecialView
{
    public function index()
    {
        return $this->viewColor("index");
    }

    public function shop()
    {
        return $this->viewColor("shop");
    }

    public function aboutUs()
    {
        return  $this->viewColor("about-us");
    }

    public function gallery()
    {
        return  $this->viewColor("gallery");
    }

    public function contactUs()
    {
        return  $this->viewColor("contact");
    }
    public function receiveMessage(Request $request){

        return redirect()->back();
    }
}
