<?php

namespace App\View\Components\ContactUs;

use App\Models\Common\Information;
use Illuminate\View\Component;

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
        $address = Information::address();
        $email = Information::email();
        $phone = Information::phone();
        $this->informations = [
            $this->getInfo($address),
            $this->getInfo($email),
            $this->getInfo($phone)
        ];
//        $this->informations = [
//            new InformationCompanyModel("Address", "flaticon-placeholder", "44 New Design Street, Down Town, Melbourne 005"),
//            new InformationCompanyModel("Call to Us", "flaticon-technology-4", "564-334-21-22-34 <br>664-334-21-22-34"),
//            new InformationCompanyModel("Emails us", "flaticon-envelope", "information@yourdomain.com"),
//        ];
    }

    public function getInfo($model)
    {
        if ($model)
            return new InformationCompanyModel($model->title, $model->icon_data, $model->data);
        else
            return new InformationCompanyModel("", "", "");
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
