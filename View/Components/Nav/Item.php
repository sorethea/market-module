<?php

namespace Modules\Market\View\Components\Nav;

use Illuminate\View\Component;

class Item extends Component
{
    public string $url;
    public string $name;
    public string $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url,$name,$icon="window")
    {
        $this->url = $url;
        $this->name = $name;
        $this->icon = $icon;
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
