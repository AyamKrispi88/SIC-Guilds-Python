<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class daftarburonan extends Component
{
            public string $gmbr;
            public string $judul;
            public string $ket;
    /**
     * Create a new component instance.
     */
    public function __construct(string $gmbr, string $judul, string $ket)
    {
        $this -> gmbr = $gmbr;
        $this -> judul = $judul;
        $this -> ket = $ket;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.daftarburonan');
    }
}
