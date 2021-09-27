<?php

namespace App\View\Components\AboutUs;

use App\Models\AboutCompany\Hotline;
use Illuminate\View\Component;

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
        $hotline = Hotline::all()->first();
        if ($hotline) {
            $this->calls = new CallAboutModel($hotline->mini_header,
                $hotline->phone,
                $hotline->body,
                $hotline->imageLeft->icon,
                $hotline->imageRight->image);
        } else {
            $this->calls = new CallAboutModel("", "",
                '',
                "", "");
        }
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
