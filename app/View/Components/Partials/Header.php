<?php

namespace App\View\Components\Partials;

use App\InterfaceToFron\InterfaceToFront;
use App\InterfaceToFron\Logo;
use App\InterfaceToFron\SocialLinks;
use App\Models\Common\Footer\FollowUs;
use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class Language
{
    public $lang_id;
    public $name_of_language;


    public function __construct($lang_id, $name_of_language)
    {
        $this->lang_id = $lang_id;
        $this->name_of_language = $name_of_language;

    }

}

class Headers
{
    public $title;
    public $link;

    public function __construct($title, $link)
    {
        $this->link = $link;
        $this->title = $title;
    }
}


// I will translate info thanks to mutator. Checking process will be based on null values. If the one of the variable is not equal to null , it will be displayed
// Submission process of the language

class Header extends Component
{
    use InterfaceToFront;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $headers;
    public $logos;
    public $social_links;
    public $languages;
    public $chosen_lang;

    public function __construct()
    {


        $this->setSocialLinks();
        $this->setLogo();
        $this->setHeader();
        $this->setMainLanguage();
    }

    public function setSocialLinks()
    {

        $this->social_links = $this->getSocialLinks();
    }

    public function setLogo()
    {
        $logo =
        $this->logos = $this->getLogo();
    }

    public function setHeader()
    {
        $this->headers = [];
        foreach (\App\Models\Common\Header::all() as $header) {
            array_push($this->headers, new Headers($header->name, $header->link));
        }
    }

    public function setMainLanguage()
    {
        $this->languages = collect([
            new Language("uz", "O'zbek tili"),
            new Language("en", "English language"),
            new Language("ru", "Русский язык"),
        ]);

        $this->chosen_lang = $this->languages->where("lang_id", "=", session("locale"))->first()->name_of_language;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partials.header');
    }
}
