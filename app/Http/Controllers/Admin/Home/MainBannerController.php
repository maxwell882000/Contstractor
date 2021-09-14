<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Common\Buttons;
use App\Models\Common\Images;
use App\Models\Home\MainBanner;
use Illuminate\Http\Request;

class MainBannerController extends Controller
{
    public function mainBannerShow()
    {
        if (!($main_banner = MainBanner::all()->last())) {
            $main_banner = [];
        }
        return view("admin_panel.pages.home.main_banner", ["banner" => $main_banner]);
    }

    public function mainBannerInput(Request $request)
    {
        if (!MainBanner::all()->first()) {
            $main_banner = MainBanner::create($request->all());
            $this->createBothButtonAndImage($request, MainBanner::class, $main_banner->id);
        } else
            $main_banner = MainBanner::update($request->all());
        //finish updates clean the code
        return redirect()->back();
    }

    private function createBothButtonAndImage($request, $type, $id)
    {
        $pathName = "images_store/banner";
        $name = time() . "." . $request->image->extension();
        $request->file("image")->move($pathName, $name);
        $path = $pathName . "/" . $name;
        Images::createNew($path, $type, $id);
        $this->createButton($request->all(), $type, $id);
    }

    private function createButton($data, $type, $id)
    {
        $data["button_type"] = $type;
        $data["button_id"] = $id;
        return Buttons::create($data);
    }
}
