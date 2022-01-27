<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $label;

    public function __construct($label)
    {
        $this->label = $label;
    }


    public function render()
    {
        return view('components.input.checkbox');
    }
}
