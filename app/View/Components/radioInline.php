<?php

namespace App\View\Components;

use Illuminate\View\Component;

class radioInline extends Component
{
    public $value_01;
    public $value_02;
    public $value_03;
    public $value_04;
    public $value_05;

    public function __construct($order="")
    {
        if($order == "asc"){
            $this->value_01 = 0;
            $this->value_02 = 1;
            $this->value_03 = 2;
            $this->value_04 = 3;
            $this->value_05 = 4;
        }
        if ($order == "desc"){
            $this->value_01 = 4;
            $this->value_02 = 3;
            $this->value_03 = 2;
            $this->value_04 = 1;
            $this->value_05 = 0;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.radio-inline');
    }
}
