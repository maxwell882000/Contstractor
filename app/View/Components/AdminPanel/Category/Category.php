<?php
namespace App\View\Components\AdminPanel\Category;
use Illuminate\View\Component;

class Category extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     **/
    public $categories;
    public $check;

    public function __construct($model, $object)
    {

        $this->categories = $model::all();
        $this->object = $object;

        $this->check = function ($id) {
            if ($this->object) {
                return $this->object->category->contains($id);
            }
            return false;
        };
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-panel.category.category');
    }
}
