<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action;
    public $method;
    public $isGet;
    

    public function __construct($action='', $method='POST')
    {
        $this->action = $action;
        $this->method = $method;
        $this->isGet  = $this->isGet();
    }


    public function render()
    {
        return view('components.form');
    }


    public function isGet() {
        $method = strtoupper($this->method);
        $result = $method === 'GET';

        return $result;
    }
}
