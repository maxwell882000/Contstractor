<?php

namespace App\View\Components\Home;

use App\InterfaceToFron\InterfaceToFront;
use App\Models\Home\SectionNearMap;
use Illuminate\View\Component;

class FluidSection
{
    public $title;
    public $header;
    public $name_button;
    public $link;

    public function __construct($title, $header, $name_button = "", $link = "")
    {
        $this->title = $title;
        $this->header = $header;
        $this->name_button = $name_button;
        $this->link = $link;
    }
}


class MapHome extends Component
{
    use InterfaceToFront;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $fluid_section;
    public $map_data;
    public $key;
    public function __construct()
    {
        $near = SectionNearMap::all()->first();
        if ($near) {
            $this->fluid_section = new FluidSection($near->title, $near->header, $near->button->name, $near->button->link);
        } else {
            $this->fluid_section = new FluidSection("", "", "", "");
        }

        $this->map_data = $this->getMap();
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
