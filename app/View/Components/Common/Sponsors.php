<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Partners
{
    public $title;
    public $sponsors;

    public function __construct($title, $sponsors)
    {
        $this->title = $title;
        $this->sponsors = $sponsors;
    }
}

class SponsorsModel
{
    public $image_path;
    public $link;

    public function __construct($image_path, $link)
    {
        $this->image_path = $image_path;
        $this->link = $link;
    }
}

class Sponsors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $partners;

    public function __construct()
    {
        $sponsors = collect([
            new SponsorsModel("images_admin/sponsors/1.png", "#"),
            new SponsorsModel("images_admin/sponsors/2.png", "#"),
            new SponsorsModel("images_admin/sponsors/3.png", "#"),
            new SponsorsModel("images_admin/sponsors/4.png", "#"),
            new SponsorsModel("images_admin/sponsors/5.png", "#"),
        ]);
        $this->partners = new Partners("Our Partnes", $sponsors);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.sponsors');
    }
}
