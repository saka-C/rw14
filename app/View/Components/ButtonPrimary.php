<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ButtonPrimary extends Component
{
    public $text;
    public $href;
    public $class;

    public function __construct($text = 'Button', $href = '#', $class = '')
    {
        $this->text = $text;
        $this->href = $href;
        $this->class = $class;
    }

    public function render()
    {
        return view('components.button-primary');
    }
}
