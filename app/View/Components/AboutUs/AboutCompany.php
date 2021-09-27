<?php

namespace App\View\Components\AboutUs;

use App\Models\AboutCompany\AboutCompanyTitle;
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
        $title = AboutCompanyTitle::all()->first();
        if ($title) {
            $this->title = $title->title;
            $this->image = $title->image->image;

            $this->about_company = $title->description->map(function ($item) {
                return new AboutCompanyDescription(
                    $item->title,
                    $item->header,
                    $item->body,
                    $item->footer,
                    $item->id,
                    $item->key_word
                );
            });
        } else
            $this->about_company = collect([]);

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
