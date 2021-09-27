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
            $this->images[$image->id] = new GalleryImages($image->id ?? "",
                $this->getCategory($image->category, $titles),
                $image->image->image ?? ""
            );
        }

//        $this->images = collect([
//            new GalleryImages(0, [
//                $titles[0],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(1, [
//                $titles[0],
//                $titles[1],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(2, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(3, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(4, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//                $titles[4],
//                $titles[5],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(5, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//                $titles[4],
//                $titles[5],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(6, [
//                $titles[0],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(7, [
//                $titles[0],
//                $titles[1],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(8, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(9, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(10, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//                $titles[4],
//                $titles[5],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(5, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//                $titles[4],
//                $titles[5],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(0, [
//                $titles[0],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(1, [
//                $titles[0],
//                $titles[1],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(2, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(3, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(4, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//                $titles[4],
//                $titles[5],
//            ], "images_admin/gallery/26.jpg"),
//            new GalleryImages(5, [
//                $titles[0],
//                $titles[1],
//                $titles[2],
//                $titles[3],
//                $titles[4],
//                $titles[5],
//            ], "images_admin/gallery/26.jpg"),
//        ])->paginate(5);

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
