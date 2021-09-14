<?php

namespace App\View\Components\Partials;

use Illuminate\View\Component;

class Links
{
    public $name;
    public $link;

    public function __construct($name, $link)
    {
        $this->name = $name;
        $this->link = $link;
    }
}

class ImagesInstagram
{
    public $image_path;
    public $image_preview_path;

    public function __construct($image_path, $image_preview_path)
    {
        $this->image_path = $image_path;
        $this->image_preview_path = $image_preview_path;
    }
}

class InformationTable
{
    public $title;
    public $icon_path;
    public $data;

    public function __construct($title, $icon_path, $data)
    {
        $this->title = $title;
        $this->icon_path = $icon_path;
        $this->data = $data;
    }
}


class FooterModel
{
    public $text_desc_footer;// text which appears in the left most
    public $keep_in_touch;
    public $information_model;
    public $instagram_feed; //array
    public $instagram_images;// just name
    public $featured_links;
    public $actual_links;  // array
    public $follows_us;
    public $social_links;

    public function __construct($text_desc_footer, $keep_in_touch,
                                $information_model, $instagram_feed,
                                $instagram_images, $featured_links,
                                $actual_links, $follows_us, $social_links)
    {
        $this->text_desc_footer = $text_desc_footer;
        $this->keep_in_touch = $keep_in_touch;
        $this->information_model = $information_model;
        $this->instagram_feed = $instagram_feed;
        $this->instagram_images = $instagram_images;
        $this->featured_links = $featured_links;
        $this->actual_links = $actual_links;
        $this->follows_us = $follows_us;
        $this->social_links = $social_links;
    }
}

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $footer;
    public $logo;
    public $copy_rights;

    private function setCopyRights()
    {
        $this->copy_rights = "Copyrights &copy; Warsaw 2016. All rights reserved.";
    }

    private function setLogo()
    {
        $this->logo = new Logo("images_admin/logo-3.png", "");
    }

    public function __construct()
    {
        $this->setLogo();
        $this->setFooter();
        $this->setCopyRights();
    }

    private function setFooter()
    {
        $information_model = $this->getInformationModel();
        $social_links = $this->getSocialLinks();
        $image_instagram = $this->getImageInstagram();
        $links = $this->getFeaturedLinks();
        $this->footer = new FooterModel(
            "Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoat nacus nisi sed, pulvinar ex.
            Etiam sit amet libero consea typoe, convallis odio estibulum urna",
            "Keep in touch",
            $information_model,
            "Instagram Feed",
            $image_instagram,
            "Featured Links",
            $links,
            "Follow Us",
            $social_links
        );
    }

    private function getFeaturedLinks()
    {
        return collect([
            new Links("About 1", "/"),
            new Links("Testimonial 2 ", "521"),
            new Links("What We Do 3", "125"),
            new Links("New Products 4" , ""),
            new Links("New Products 5 ", ""),
            new Links("What We Do 6", ""),
        ]);
    }

    private function getInformationModel()
    {
        return collect([
            new InformationTable("Address", "", "Some address will be mentioned"),
            new InformationTable("Phone", "", "124156122121512512"),
            new InformationTable("Email", "", "shaxa882@gmail.com")
        ]);
    }

    private function getSocialLinks()
    {
        return collect([
            new SocialLinks("facebook-official", ""),
            new SocialLinks("twitter", ""),
            new SocialLinks("google-plus", ""),
            new SocialLinks("instagram", ""),
        ]);
    }

    private function getImageInstagram()
    {
        return collect([
            new ImagesInstagram("images_admin/resource/footer-gallery-1.jpg", "images_admin/resource/blog-image-4.jpg"),
            new ImagesInstagram("images_admin/resource/footer-gallery-1.jpg", "images_admin/resource/blog-image-4.jpg"),
            new ImagesInstagram("images_admin/resource/footer-gallery-1.jpg", "images_admin/resource/blog-image-4.jpg"),
            new ImagesInstagram("images_admin/resource/footer-gallery-1.jpg", "images_admin/resource/blog-image-4.jpg"),
            new ImagesInstagram("images_admin/resource/footer-gallery-1.jpg", "images_admin/resource/blog-image-4.jpg"),
            new ImagesInstagram("images_admin/resource/footer-gallery-1.jpg", "images_admin/resource/blog-image-4.jpg"),
        ]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.partials.footer');
    }
}
