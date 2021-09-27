<?php

namespace App\View\Components\Common;

use App\Models\Home\InfoSectionModel;
use Illuminate\View\Component;

class Style extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $choice_color; // green
    public $main_color;  // white
    public $emphasize_color; // orange
    public $title_color; // black
    public $secondary_color; // gray
    public $preloader_GIF; //
    public $common_icon; //
    public $background_image;
    public $intro_section_before_color_home;
    public $scroll_up_color; //black
    public $home_image_down;
    public function __construct()
    {
        $common = \App\Models\Common\Style::all()->first();
        $this->scroll_up_color = $common->scroll();
        $this->choice_color = $common->choice();
        $this->intro_section_before_color_home = $common->intro_section();
        $this->main_color = $common->main();
        $this->emphasize_color = $common->emphasize();
        $this->title_color = $common->title();
        $this->secondary_color = $common->secondary();
        $this->common_icon = $common->common_icon;
        $this->preloader_GIF = $common->preloaderGif();
        if($section = InfoSectionModel::all()->first())
            $this->home_image_down = $section->image_down;

        $this->background_image = $common->backgroundImage();
//        $this->scroll_up_color = [
//            0 => 10,
//            1 => 10,
//            2 => 10,
//            3 => 1
//        ];
//        $this->choice_color = [
//            0 => 94,
//            1 => 199,
//            2 => 156,
//            3 => 1
//        ];
//        $this->intro_section_before_color_home = [
//            0 => 244, 1 => 238, 2 => 222, 3 => 0.94
//        ];
//        $this->main_color = [
//            0 => 255,
//            1 => 255,
//            2 => 255,
//            3 => 1,
//        ];
//        $this->emphasize_color = [
//            0 => 245,
//            1 => 176,
//            2 => 98,
//            3 => 1,
//        ];
//        $this->title_color = [
//            0 => 51,
//            1 => 51,
//            2 => 51,
//            3 => 1,
//        ];
//        $this->secondary_color = [
//            0 => 119,
//            1 => 119,
//            2 => 119,
//            3 => 1,
//        ];
//        $this->common_icon = "../images/icons/icon-crops.png";
//        $this->preloader_GIF = "../images/icons/preloader.GIF";
//        $this->background_image = "../images/background/pattern-one.png";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.style',);
    }
}
