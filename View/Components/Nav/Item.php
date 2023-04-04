<?php

namespace Modules\Market\View\Components\Nav;

use Illuminate\View\Component;

class Item extends Component
{
    private string $url;
    private string $name;
    /**
     * @var string
     */
    private mixed $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $url,string $name,string $icon="window")
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
