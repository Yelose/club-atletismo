<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Noticia extends Component
{
    public $noticia;
    public function __construct($noticia)
    {
        $this->noticia = $noticia;
    }
    public function render()
    {
        return view("components.noticias.aside");
    }
}
