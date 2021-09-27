<?php

namespace App\View\Components\Common;

use App\Models\Common\Sponsor;
use App\Models\Common\SponsorTitle;
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
        $title = SponsorTitle::all()->first();

        $sponsors = Sponsor::all()->map(function ($item) {
                return new SponsorsModel($item->image->image, $item->link);
            }) ?? [];
        if ($title)
            $this->partners = new Partners($title->title, $sponsors);
        else
            $this->partners = new Partners("", $sponsors);
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
