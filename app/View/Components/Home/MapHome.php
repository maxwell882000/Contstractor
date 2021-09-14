<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class FluidSection
{
    public $title;
    public $header;
    public $name_button;
    public $link;

    public function __construct($title, $header, $name_button="", $link="")
    {
        $this->title = $title;
        $this->header = $header;
        $this->name_button = $name_button;
        $this->link = $link;
    }
}

class MapModel
{
    public $lat;
    public $lang;
    public $zoom;
    public $type;
    public $hue_color;
    public $title;
    public $content;
    public $API_key;
    public function __construct($title, $content, $hue_color, $lang, $lat,
                                $type, $zoom)
    {
        $this->lang = $lang;
        $this->title = $title;
        $this->content = $content;
        $this->hue_color = $hue_color;
        $this->lat = $lat;
        $this->type = $type;
        $this->zoom = $zoom;
    }

}

class MapHome extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $fluid_section;
    public $map_data;

    public function __construct()
    {
        $this->fluid_section = new FluidSection("Some title", "This header which goes","Contact us");
        $this->map_data = new MapModel(
            "Dhaka",
            "Dhaka 1000-1200, Bangladesh<br><a href='mailto:info@youremail.com'>info@youremail.com</a>",
            "fc721e",
            "90.412580",
            "23.815811",
            "roadmap",
            "10"
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.map-home');
    }
}
