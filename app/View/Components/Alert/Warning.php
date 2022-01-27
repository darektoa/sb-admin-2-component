<?php

namespace App\View\Components\Alert;

use App\View\Components\Alert;

class Warning extends Alert
{
    public function __construct($value)
    {
        parent::__construct($value);
    }


    public function render()
    {
        return view('components.alert.warning');
    }
}
