<?php

namespace App\View\Components;

use Illuminate\View\Component;

class radioinline extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $value01;
    /**
     * The alert type.
     *
     * @var string
     */
    public $value02;
    /**
     * The alert type.
     *
     * @var string
     */
    public $value03;
    /**
     * The alert type.
     *
     * @var string
     */
    public $value04;
    /**
     * The alert type.
     *
     * @var string
     */
    public $value05;

    public $order;

    public function __construct($order)
    {
        $this->order = $order;
        if($this->order == "asc"){
            $this->value01 = "0";
            $this->value02 = "1";
            $this->value03 = "2";
            $this->value04 = "3";
            $this->value05 = "4";
        }
        if ($this->order == "desc"){
            $this->value01 = "4";
            $this->value02 = "3";
            $this->value03 = "2";
            $this->value04 = "1";
            $this->value05 = "0";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.radioinline');
    }
}
