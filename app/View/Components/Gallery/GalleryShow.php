<?php

namespace App\View\Components\Gallery;

use App\InterfaceToFron\InterfaceToFront;
use App\Models\Tags\ImageToCategory;
use Hamcrest\Core\Set;

use Illuminate\View\Component;


class GalleryImages
{
    public $id;
    public $categories;
    public $image_path;

    public function __construct($id, $categories, $image_path)
    {
        $this->id = $id;
        $this->categories = collect($categories);
        $this->image_path = $image_path;
    }
}

class GalleryShow extends Component
{
    use InterfaceToFront;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $titles;
    public $images;
    public $paginate;

    public function __construct($images)
    {
        $titles = [];
        $this->paginate = $images;
        $this->images = collect([]);
        foreach ($images->items() as $image) {
            $this->images[$image->id] = new GalleryImages($image->id,
                $this->getCategory($image->category, $titles),
                $image->image->image
            );
        }


        $this->titles = $titles;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.gallery.gallery-show');
    }
}
