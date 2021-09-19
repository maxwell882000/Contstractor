<?php

namespace App\View\Components\ContactUs;

use App\InterfaceToFron\InterfaceToFront;
use Illuminate\View\Component;

class MapContactUs extends Component
{
    use InterfaceToFront;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $map_data;

    public function __construct()
    {
        $this->map_data = $this->getMap();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-us.map-contact-us');
    }
}
