<?php

namespace App\View\Components\Home;

use App\Models\Home\InfoSectionModel;
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
        $title = InfoSectionModel::all()->first();
        $desc_left = $title->leftDescription();
        $desc_right = $title->rightDescription();
        $more_info = [
            new IntroDescription($desc_left->title,
                $desc_left->body, $desc_left->button->name, $desc_left->button->link),
            new IntroDescription($desc_right->title,
                $desc_right->body, $desc_right->button->name, $desc_right->button->link),
        ];
        $this->information = new IntroSectionModel(
            $title->title,
            $desc_left->image->image,
            $more_info,
            $desc_right->image->image);
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
