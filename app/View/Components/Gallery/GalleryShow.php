<?php

namespace App\View\Components\Gallery;

use Hamcrest\Core\Set;
use Illuminate\View\Component;

class  ItemCategory
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
}

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
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $titles;
    public $images;

    public function __construct()
    {
        $titles = [
            new ItemCategory("animals"),
            new ItemCategory("farm"),
            new ItemCategory("flowers"),
            new ItemCategory("dogs"),
            new ItemCategory("cats"),
            new ItemCategory("bUU"),

        ];

        $this->images = collect([
            new GalleryImages(0, [
                $titles[0],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(1, [
                $titles[0],
                $titles[1],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(2, [
                $titles[0],
                $titles[1],
                $titles[2],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(3, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(4, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
                $titles[4],
                $titles[5],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(5, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
                $titles[4],
                $titles[5],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(6, [
                $titles[0],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(7, [
                $titles[0],
                $titles[1],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(8, [
                $titles[0],
                $titles[1],
                $titles[2],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(9, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(10, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
                $titles[4],
                $titles[5],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(5, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
                $titles[4],
                $titles[5],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(0, [
                $titles[0],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(1, [
                $titles[0],
                $titles[1],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(2, [
                $titles[0],
                $titles[1],
                $titles[2],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(3, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(4, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
                $titles[4],
                $titles[5],
            ],"images_admin/gallery/26.jpg"),
            new GalleryImages(5, [
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
                $titles[4],
                $titles[5],
            ],"images_admin/gallery/26.jpg"),
        ])->paginate(5);

        $this->titles= $titles;
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
