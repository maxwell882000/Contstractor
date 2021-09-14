<?php

namespace App\View\Components\AboutUs;

use Illuminate\View\Component;
use function Symfony\Component\Translation\t;

class  CallAboutModel
{
    public $title;
    public $number;
    public $body;
    public $image_path_left;
    public $image_path_right;

    public function __construct($title, $number, $body, $image_path_left, $image_path_right)
    {
        $this->title = $title;
        $this->number = $number;
        $this->body = $body;
        $this->image_path_left = $image_path_left;
        $this->image_path_right = $image_path_right;
    }
}

class CallAbout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $calls;

    public function __construct()
    {
        $this->calls = new CallAboutModel("HOTLINE",
            "(+01)- 123 789 456",
            "Trains women to work in professional kitchens, provides healthy meals for childcare centers, and uses food ...",
        "images_admin/resource/man-with-food-2.png",
        "images_admin/resource/food-image-12.png");

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about-us.call-about');
    }
}
