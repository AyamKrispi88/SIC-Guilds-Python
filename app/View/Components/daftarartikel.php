<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class daftarartikel extends Component
{
    public string $img;
    public string $title;
    public string $content;
    public string $author;
    public string $url; 
    /**
     * Create a new component instance.
     */
    public function __construct(string $img, string $title, string $content, string $author, string $url)
    {
        $this -> img = $img;
        $this -> title = $title;
        $this -> content = $content;
        $this -> author = $author;
        $this -> url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.daftarartikel');
    }
}
