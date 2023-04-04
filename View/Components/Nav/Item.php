<?php

namespace Modules\Market\View\Components\Nav;

use Illuminate\View\Component;

class Item extends Component
{
    private string $url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('market::components.nav/item');
    }
}
