<?php

namespace App\View\Components\Shop;


use App\InterfaceToFron\InterfaceToFront;
use App\View\Components\Gallery\GalleryImages;
use Illuminate\View\Component;


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
            $this->images[$image->id] = new ShopItem(
                $image->name, $image->price,
                $image->image->image,
                $this->getCategory($image->category, $titles),
                $image->currency
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
        return view('components.shop.shop-show');
    }
}
