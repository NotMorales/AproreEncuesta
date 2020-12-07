<?php

namespace App\View\Components;

use Illuminate\View\Component;

class wizardNav extends Component
{
    public $titulo;
    public $subTitulo;
    public $extra;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo="", $subTitulo="", $extra="")
    {
        $this->titulo = $titulo;
        $this->subTitulo = $subTitulo;
        $this->extra = $extra;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.wizard-nav');
    }
}
