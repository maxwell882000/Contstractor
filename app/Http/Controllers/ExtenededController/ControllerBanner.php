<?php

namespace App\Http\Controllers\ExtenededController;

use App\Models\Common\BannerForThreeSection;

class   ControllerBanner extends ControllerExtendedInput
{

    ///
    /// 0 == AboutCompany
    /// 1 == Gallery
    /// 2 == ShopGallery
    public $type;
    public $model = BannerForThreeSection::class;
    public $pathStoreImages = "images_store/three_banner";
    public $nameInBlade = "banner";
    public $pathToBlade = "admin_panel.pages.three_banners.begin_banner";

    public function modelShow()
    {
        if (!($object = $this->model::where("type", "=", $this->type)->first()))
            $object = [
                "type" => $this->type
            ];
        return view($this->pathToBlade, [$this->nameInBlade => $object]);
    }
}
