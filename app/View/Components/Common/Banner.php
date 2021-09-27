<?php

namespace App\View\Components\Common;

use App\Models\Common\BannerForThreeSection;
use Illuminate\View\Component;

class BannerModel
{
    public $image_path;
    public $title;

    public function __construct($image_path, $title)
    {
        $this->image_path = $image_path;
        $this->title = $title;
    }
}

class Banner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $banner;

    public function __construct($type)
    {
        $banner = BannerForThreeSection::where("type", "=", $type)->first();
        if ($banner)
            $this->banner = new BannerModel($banner->image->image, $banner->title);
        else
            $this->banner = new BannerModel("", "");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.banner');
    }
}
