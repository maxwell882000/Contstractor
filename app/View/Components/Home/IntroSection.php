<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class IntroSectionModel
{
    public $title;
    public $left_image_path;
    public $right_image_path;
    public $more_info_section;

    public function __construct($title, $left_image_path, $more_info_section, $right_image_path)
    {
        $this->title = $title;
        $this->left_image_path = $left_image_path;
        $this->right_image_path = $right_image_path;
        $this->more_info_section = collect($more_info_section);
    }
}

class IntroDescription
{
    public $header;
    public $body;
    public $name_button;
    public $link;

    public function __construct($header, $body, $name_button, $link)
    {
        $this->header = $header;
        $this->body = $body;
        $this->name_button = $name_button;
        $this->link = $link;
    }
}

class IntroSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $information;

    public function __construct()
    {
        $more_info = [
            new IntroDescription("01. 100% Organic",
                "Cheese strings bocconcini gouda. Parmesan emmental danish fontina cheese triangles bocconcini rubber cheese cheese slices bavarian bergkase."
                , "Read More", "#"),
            new IntroDescription("02. Best Quality Products",
                "Cheese strings bocconcini gouda. Parmesan emmental danish fontina cheese triangles bocconcini rubber cheese cheese slices bavarian bergkase."
                , "Read More", "#")
        ];
        $this->information = new IntroSectionModel(
            "Welcome to our  form",
            "../images_admin/resource/crop-image-left.png",
            $more_info,
            "../images_admin/resource/crop-image-right.png");
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.intro-section');
    }
}
