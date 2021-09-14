<?php

namespace App\View\Components\ContactUs;

use Illuminate\View\Component;
use function Symfony\Component\Translation\t;

class InformationCompanyModel
{
    public $title;
    public $icon;
    public $data;

    public function __construct($title, $icon, $data)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->data = $data;
    }
}

class InformationCompany extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $informations;

    public function __construct()
    {
        $this->informations = [
            new InformationCompanyModel("Address", "flaticon-placeholder", "44 New Design Street, Down Town, Melbourne 005"),
            new InformationCompanyModel("Call to Us", "flaticon-technology-4", "564-334-21-22-34 <br>664-334-21-22-34"),
            new InformationCompanyModel("Emails us", "flaticon-envelope", "information@yourdomain.com"),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.contact-us.information-company');
    }
}
