<?php

namespace Modules\Market\View\Components\Page;

use Illuminate\View\Component;

class Brand extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('market::components.page/brand');
    }
}
