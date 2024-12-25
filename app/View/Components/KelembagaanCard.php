<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class KelembagaanCard extends Component
{
    public $title;
    public $description;
    public $img;

    public function __construct($title, $description, $img)
    {
        $this->title = $title;
        $this->description = $description;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.kelembagaan-card');
    }
}
