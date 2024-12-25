<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LayananCard extends Component
{
    public $title;
    public $description;
    public $requirements;
    public $actionLink;

    public function __construct($title, $description, $requirements, $actionLink)
    {
        $this->title = $title;
        $this->description = $description;
        $this->requirements = is_string($requirements) ? [$requirements] : $requirements;
        $this->actionLink = $actionLink;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layanan-card');
    }
}
