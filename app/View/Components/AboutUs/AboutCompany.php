<?php

namespace App\View\Components\AboutUs;

use Illuminate\View\Component;

class AboutCompanyDescription
{

    public $title;
    public $header;
    public $body;
    public $footer;
    public $id;
    public $id_to_show;

    public function __construct($title, $header, $body, $footer, $id, $id_to_show)
    {
        $this->title = $title;
        $this->id = $id;
        $this->id_to_show = $id_to_show;
        $this->header = $header;
        $this->body = $body;
        $this->footer = $footer;
    }
}

class AboutCompany extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $image;
    public $about_company;

    public function __construct()
    {
        $this->title = "Welcome to our healthy form";
        $this->image = "images_admin/resource/food-image-1.png";
        $this->about_company = collect([
            new AboutCompanyDescription(
                "About Us",
                "Have look at out beautiful farm",
                "We started Warsaw Organic Store in order to source organic produce directly from local farms. The year was 2012. It was the best of times, it was the worst of times.
                Our Goal: The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.
                We’ve spent the past few years building a business and service that we love. A service that makes the safest",
                "Muhibbur Rashid",
                1,
                "2014"
            ),
            new AboutCompanyDescription(
                "About Us",
                "Have look at out beautiful farm",
                "We started Warsaw Organic Store in order to source organic produce directly from local farms. The year was 2012. It was the best of times, it was the worst of times.
                Our Goal: The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.
                We’ve spent the past few years building a business and service that we love. A service that makes the safest",
                "Muhibbur Rashid",
                2,
                "2016"
            ),
            new AboutCompanyDescription(
                "About Us",
                "Have look at out beautiful farm",
                "We started Warsaw Organic Store in order to source organic produce directly from local farms. The year was 2012. It was the best of times, it was the worst of times.
                Our Goal: The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.
                We’ve spent the past few years building a business and service that we love. A service that makes the safest",
                "Muhibbur Rashid",
                3,
                "2018"
            ),
            new AboutCompanyDescription(
                "About Us",
                "Have look at out beautiful farm",
                "We started Warsaw Organic Store in order to source organic produce directly from local farms. The year was 2012. It was the best of times, it was the worst of times.
                Our Goal: The goal was (and still is) to provide a service where local farms are given priority and members are able to access the freshest organic items available at a fair price.
                We’ve spent the past few years building a business and service that we love. A service that makes the safest",
                "Muhibbur Rashid",
                4,
                "2020"
            ),
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about-us.about-company');
    }
}
