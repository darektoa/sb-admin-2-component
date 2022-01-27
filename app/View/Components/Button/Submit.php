<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;

class Submit extends Component
{
    public $value;


    public function __construct($value)
    {
        $this->value = $value;
    }


    public function render()
    {
        return view('components.button.submit');
    }
}
