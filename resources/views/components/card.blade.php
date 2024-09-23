<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $content;
    public $button;
    public $image;

    public function __construct($title = null, $content = null, $button = null, $image = null)
    {
        $this->title = $title;
        $this->content = $content;
        $this->button = $button;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.card');
    }
}