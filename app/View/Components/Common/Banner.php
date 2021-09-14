<?php

namespace App\View\Components\Common;

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
    public function __construct()
    {
        $this->banner = new BannerModel("images_admin/background/bg-page-title-1.jpg","Shop");
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
