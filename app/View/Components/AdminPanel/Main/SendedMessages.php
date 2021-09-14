<?php

namespace App\View\Components\AdminPanel\Main;

use Illuminate\View\Component;

class SendedMessages extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-panel.main.sended-messages');
    }
}
