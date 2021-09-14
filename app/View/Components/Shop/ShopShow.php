<?php

namespace App\View\Components\Shop;



use Illuminate\View\Component;
class  ItemCategory
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
}

class ShopItem
{
    public $name;
    public $price;
    public $image_path;
    public $categories;
    public $currency;
    public function __construct($name, $price, $image_path, $categories, $currency = "$")
    {
        $this->name = $name;
        $this->price = $price;
        $this->image_path = $image_path;
        $this->categories = $categories;
        $this->currency = $currency;
    }
}

class ShopShow extends Component
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
        $this->titles = $titles;
        $this->images = [
            new ShopItem("Kiwi","18.0","images_admin/gallery/1.jpg",[
                $titles[0],
            ]),
            new ShopItem("Kiwi","18.0","images_admin/gallery/1.jpg",[
                $titles[2],
                $titles[1],
            ]),
            new ShopItem("Kiwi","18.0","images_admin/gallery/1.jpg",[
                $titles[0],
                $titles[4],
                $titles[5],
            ]),
            new ShopItem("Kiwi","18.0","images_admin/gallery/1.jpg",[
                $titles[0],
                $titles[1],
                $titles[2],
                $titles[3],
            ]),
            new ShopItem("Kiwi","18.0","images_admin/gallery/1.jpg",[
                $titles[0],
                $titles[2],
            ]),
        ];


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.shop.shop-show');
    }
}
