<?php

namespace App\View\Components\AboutUs;

use App\Models\AboutCompany\PersonalsTitle;
use Illuminate\View\Component;

class Personal
{
    public $image_path;
    public $name;
    public $description;

    public function __construct($image_path, $name, $description)
    {
        $this->image_path = $image_path;
        $this->name = $name;
        $this->description = $description;
    }
}

class AboutTeam extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $personals;

    public function __construct()
    {
        $title = PersonalsTitle::all()->first();
        if($title) {
            $this->title = $title->title;
            $this->personals = $title->personal->map(function ($item) {
                return new Personal($item->image->image, $item->name, $item->body);
            })->all();
        }
        else
            $this->personals =  [
                new Personal("images/resource/team-image-1.jpg", "Peter Parker 1", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-1.jpg", "Peter Parker 2", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-3.jpg", "Peter Parker 3", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-1.jpg", "Peter Parker 4", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-1.jpg", "Peter Parker 5", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-3.jpg", "Peter Parker 6", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-1.jpg", "Peter Parker 7", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-1.jpg", "Peter Parker 8", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
                new Personal("images/resource/team-image-3.jpg", "Peter Parker 9", "Meet the maker of our bread – our fabulous baker boy alberto Trombin. He creates superb bread in their Melbourne-based bread-quarters."),
            ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about-us.about-team');
    }
}
