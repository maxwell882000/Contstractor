<?php

namespace App\View\Components\Partials;

use Illuminate\View\Component;

class Language
{
    public $lang_id;
    public $name_of_language;
    public $selected;

    public function __construct($lang_id, $name_of_language, $selected)
    {
        $this->lang_id = $lang_id;
        $this->name_of_language = $name_of_language;
        $this->selected = $selected;
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

class Logo
{
    public $logo_220_80;
    public $logo_150_80;

    public function __construct($logo_220_80, $logo_150_80)
    {
        $this->logo_150_80 = $logo_150_80;
        $this->logo_220_80 = $logo_220_80;
    }
}

class SocialLinks
{
    public $name_of_icon;
    public $link;

    public function __construct($name_of_icon, $link)
    {
        $this->name_of_icon = $name_of_icon;
        $this->link = $link;
    }
}

// I will translate info thanks to mutator. Checking process will be based on null values. If the one of the variable is not equal to null , it will be displayed
// Submission process of the language

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $headers;
    public $logos;
    public $social_links;
    public $languages;

    public function __construct()
    {
        $this->social_links = collect(
            [
                new SocialLinks("facebook", ""),
                new SocialLinks("twitter", ""),
                new SocialLinks("google-plus", ""),
                new SocialLinks("instagram", ""),
            ]);
        $this->logos = new Logo("images_admin/logo-4.png", "images_admin/logo.png");
        $this->headers = [
            0 => new Headers("HOMEs", "/"),
            1 => new Headers("ABOUT US", "about-us"),
            2 => new Headers("GALLERY", "gallery"),
            3 => new Headers("SHOP", "shop"),
            4 => new Headers("CONTACT US", "contact-us"),
        ];
        $this->languages = [
            new Language(1, "O'zbek", false),
            new Language(2, "English", true),
            new Language(3, "Русский", false),
        ];
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
