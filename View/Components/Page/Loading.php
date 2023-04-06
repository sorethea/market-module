<?php

namespace Modules\Market\View\Components\Page;

use Illuminate\View\Component;

class Loading extends Component
{

    public string $loading_msg;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->loading_msg = app(\Modules\Market\Settings\MarketSetting::class)->loading_msg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('market::components.page/loading');
    }
}
