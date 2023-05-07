<?php

namespace App\View\Components;

use Illuminate\View\Component;

class foot extends Component
{
    public $ble;
    /**
     * Create a new component instance.
     *
     * @return void
     */
   
    public function __construct($name)
    {
      $this->ble=$name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.foot');
    }
}