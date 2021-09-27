<?php

namespace App\View\Components\Home;


use Illuminate\View\Component;

class ImageBannerBackGround
{
    public $image_path; // I may use mutator for getting path of the image , hence the name is so

    public function __construct($image_path)
    {
        $this->image_path = $image_path;
    }
}

class MainBanner
{
    public $title;
    public $mini_header;
    public $name_button;
    public $link_button;
    public $image;

    public function __construct($title, $mini_header, $name_button, $link_button, ImageBannerBackGround $image)
    {
        $this->title = $title;
        $this->mini_header = $mini_header;
        $this->name_button = $name_button;
        $this->link_button = $link_button;
        $this->image = $image;
    }
}

class HomeBanner
{
    public $icon_path;
    public $body;
    public $name_first_button;
    public $link_first;
    public $name_second_button;
    public $link_second;
    public $image;

    public function __construct($icon_path, $body, $name_first_button, $link_first, $name_second_button, $link_second, ImageBannerBackGround $image)
    {
        $this->icon_path = $icon_path;
        $this->body = $body;
        $this->name_first_button = $name_first_button;
        $this->link_first = $link_first;
        $this->name_second_button = $name_second_button;
        $this->link_second = $link_second;
        $this->image = $image;

    }
}

class Banner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $main_banner;
    public $banners;
    public $length; // used by loop when itterating to get Secondary banners

    public function __construct()
    {
        $imageBack = new ImageBannerBackGround("images/main-slider/image-1.jpg");
        $main_model = \App\Models\Home\MainBanner::all()->first();
        if ($main_model)
            $this->main_banner = new MainBanner(
                $main_model->title,
                $main_model->mini_header,
                $main_model->button->name,
                $main_model->button->link,
                new ImageBannerBackGround($main_model->image->image));
        else {
            $this->main_banner = new MainBanner(
                "",
                "",
                "",
                "/contact-us",
                new ImageBannerBackGround(""));
        }
        $home_model = \App\Models\Home\HomeBanner::all();
        $collection_home = collect([]);
        foreach ($home_model as $model) {
            $collection_home->push(new HomeBanner(
                $model->icon->icon,
                $model->body,
                $model->buttonFirst()->name,
                $model->buttonFirst()->link,
                $model->buttonSecond()->name,
                $model->buttonSecond()->link,
                new ImageBannerBackGround($model->image->image),
            ));
        }
        if ($collection_home) {
            $this->banners = $collection_home->all();
        } else {
            $this->banners = collect([
                new HomeBanner("images/main-slider/leaf-icon.png",
                    "Some more text will be theere to show  <br/>something",
                    "",
                    "/shop",
                    "See Our Team",
                    '/about-us',
                    $imageBack
                ),
                new HomeBanner("images/main-slider/leaf-icon.png",
                    "Some more  <br/>text will be theere to show something",
                    "Buy now",
                    "/shop",
                    "See Our Team",
                    '/about-us',
                    $imageBack
                ),
                new HomeBanner("images/main-slider/leaf-icon.png",
                    "THIS WAHT ID NENDED more text will be theere to <br/> show something",
                    "Buy now",
                    "/shop",
                    "See Our Team",
                    '/about-us',
                    $imageBack
                ),
            ])->all();
        }
        $this->setLengthForLoop();

    }

    function setLengthForLoop()
    {
        $realLength = count($this->banners);
        $this->length = $realLength % 2 == 0 ? $realLength : $realLength + 1;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.banner');
    }
}
